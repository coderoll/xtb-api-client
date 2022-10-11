# XTB API Client

PHP library to use X-Trade Broker websocket API.

*NOTE: WORK IN PROGRESS!*

For now only following commands are available:
- Get Symbol
- Get Trades
- Login
- Logout
- Trade Transaction
- Trade Transaction Status

Also error handling is missing.

## Installation
```
composer require coderoll/xtb-api-client
```

You will also need WebSocket client. Suggested:
```
composer require textalk/websocket
```

## Example
```php
<?php

require_once 'vendor/autoload.php';

use Coderoll\XtbApiClient\Payload\GetTrades;
use Coderoll\XtbApiClient\Payload\Login;
use Coderoll\XtbApiClient\Payload\Logout;
use Coderoll\XtbApiClient\Response\GetTradesResponse;
use Coderoll\XtbApiClient\Response\LoginResponse;
use Coderoll\XtbApiClient\Response\LogoutResponse;

// Create WebSocket client for demo
// For real account use: wss://ws.xtb.com/real
$client = new WebSocket\Client("wss://ws.xtb.com/demo");

// Prepare and send login credentials
$login = new Login('[ACCOUNT ID]', '[ACCOUNT PASSWORD]');
$client->text($login);

// Get Login response
$loginResponse = LoginResponse::createFromJson($client->receive());

// GetTrades command
$getTrades = new GetTrades(true);
$client->text($getTrades);

// var_dump of GetTrades data
$getTradesResponse = GetTradesResponse::createFromJson($client->receive());
var_dump($getTradesResponse->getReturnData());

// TradeTransaction command
$tradeTransInfo = new TradeTransInfo();
$tradeTransInfo
    ->setCmd(TradeTransInfo::CMD_BUY)
    ->setSymbol('EURUSD')
    ->setVolume(0.01)
    ->setPrice(0.01) // I think it's ignored on CMD_BUY
;
$tradeTransaction = new TradeTransaction($tradeTransInfo);
$client->text($tradeTransaction);
$tradeTransactionResponse = TradeTransactionResponse::createFromJson($client->receive());
var_dump($tradeTransactionResponse);

// Logout
$logout = new Logout();
$client->text($logout);
$logoutResponse = LogoutResponse::createFromJson($client->receive());

// If connection can't be closed by XTB, it can to be closed by client
if ($logoutResponse->isStatus() === false) {
    $client->close();
}
```
