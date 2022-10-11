<?php

namespace Coderoll\XtbApiClient\Tests\Response;

use Coderoll\XtbApiClient\Response\GetSymbolResponse;
use Coderoll\XtbApiClient\Response\Data\SymbolRecord;
use PHPUnit\Framework\TestCase;

class GetSymbolResponseTest extends TestCase
{
    /**
     * @covers GetSymbolResponse
     * @covers SymbolRecord
     */
    public function testCreateFromJson()
    {
        $json = <<<JSON
{
	"status": true,
	"returnData": {
        "ask": 4000.0,
        "bid": 4000.0,
        "categoryName": "Forex",
        "contractSize": 100000,
        "currency": "USD",
        "currencyPair": true,
        "currencyProfit": "SEK",
        "description": "USD/PLN",
        "expiration": null,
        "groupName": "Minor",
        "high": 4000.0,
        "initialMargin": 0,
        "instantMaxVolume": 0,
        "leverage": 1.5,
        "longOnly": false,
        "lotMax": 10.0,
        "lotMin": 0.1,
        "lotStep": 0.1,
        "low": 3500.0,
        "marginHedged": 0,
        "marginHedgedStrong": false,
        "marginMaintenance": null,
        "marginMode": 101,
        "percentage": 100.0,
        "precision": 2,
        "profitMode": 5,
        "quoteId": 1,
        "shortSelling": true,
        "spreadRaw": 0.000003,
        "spreadTable": 0.00042,
        "starting": null,
        "stepRuleId": 1,
        "stopsLevel": 0,
        "swap_rollover3days": 0,
        "swapEnable": true,
        "swapLong": -2.55929,
        "swapShort": 0.131,
        "swapType": 0,
        "symbol": "USDPLN",
        "tickSize": 1.0,
        "tickValue": 1.0,
        "time": 1272446136891,
        "timeString": "Thu May 23 12:23:44 EDT 2013",
        "trailingEnabled": true,
        "type": 21
    }
}
JSON;

        $getSymbolResponse = GetSymbolResponse::createFromJson($json);
        $this->assertEquals(true, $getSymbolResponse->isStatus());
        $this->assertEquals(4000.0, $getSymbolResponse->getSymbolRecord()->getAsk());
        $this->assertEquals(4000.0, $getSymbolResponse->getSymbolRecord()->getBid());
        $this->assertEquals('Forex', $getSymbolResponse->getSymbolRecord()->getCategoryName());
        $this->assertEquals(100000, $getSymbolResponse->getSymbolRecord()->getContractSize());
        $this->assertEquals('USD', $getSymbolResponse->getSymbolRecord()->getCurrency());
        $this->assertEquals(true, $getSymbolResponse->getSymbolRecord()->isCurrencyPair());
        $this->assertEquals('SEK', $getSymbolResponse->getSymbolRecord()->getCurrencyProfit());
        $this->assertEquals('USD/PLN', $getSymbolResponse->getSymbolRecord()->getDescription());
        $this->assertEquals(null, $getSymbolResponse->getSymbolRecord()->getExpiration());
        $this->assertEquals('Minor', $getSymbolResponse->getSymbolRecord()->getGroupName());
        $this->assertEquals(4000.0, $getSymbolResponse->getSymbolRecord()->getHigh());
        $this->assertEquals(0, $getSymbolResponse->getSymbolRecord()->getInitialMargin());
        $this->assertEquals(0, $getSymbolResponse->getSymbolRecord()->getInstantMaxVolume());
        $this->assertEquals(1.5, $getSymbolResponse->getSymbolRecord()->getLeverage());
        $this->assertEquals(false, $getSymbolResponse->getSymbolRecord()->isLongOnly());
        $this->assertEquals(10.0, $getSymbolResponse->getSymbolRecord()->getLotMax());
        $this->assertEquals(0.1, $getSymbolResponse->getSymbolRecord()->getLotMin());
        $this->assertEquals(0.1, $getSymbolResponse->getSymbolRecord()->getLotStep());
        $this->assertEquals(3500.0, $getSymbolResponse->getSymbolRecord()->getLow());
        $this->assertEquals(0, $getSymbolResponse->getSymbolRecord()->getMarginHedged());
        $this->assertEquals(false, $getSymbolResponse->getSymbolRecord()->getMarginMaintenance());
        $this->assertEquals(101, $getSymbolResponse->getSymbolRecord()->getMarginMode());
        $this->assertEquals(100.0, $getSymbolResponse->getSymbolRecord()->getPercentage());
        $this->assertEquals(2, $getSymbolResponse->getSymbolRecord()->getPrecision());
        $this->assertEquals(5, $getSymbolResponse->getSymbolRecord()->getProfitMode());
        $this->assertEquals(1, $getSymbolResponse->getSymbolRecord()->getQuoteId());
        $this->assertEquals(true, $getSymbolResponse->getSymbolRecord()->isShortSelling());
        $this->assertEquals(0.000003, $getSymbolResponse->getSymbolRecord()->getSpreadRaw());
        $this->assertEquals(0.00042, $getSymbolResponse->getSymbolRecord()->getSpreadTable());
        $this->assertEquals(null, $getSymbolResponse->getSymbolRecord()->getStarting());
        $this->assertEquals(1, $getSymbolResponse->getSymbolRecord()->getStepRuleId());
        $this->assertEquals(0, $getSymbolResponse->getSymbolRecord()->getStopsLevel());
        $this->assertEquals(0, $getSymbolResponse->getSymbolRecord()->getSwapRollover3Days());
        $this->assertEquals(true, $getSymbolResponse->getSymbolRecord()->isSwapEnable());
        $this->assertEquals(-2.55929, $getSymbolResponse->getSymbolRecord()->getSwapLong());
        $this->assertEquals(0.131, $getSymbolResponse->getSymbolRecord()->getSwapShort());
        $this->assertEquals(0, $getSymbolResponse->getSymbolRecord()->getSwapType());
        $this->assertEquals('USDPLN', $getSymbolResponse->getSymbolRecord()->getSymbol());
        $this->assertEquals(1.0, $getSymbolResponse->getSymbolRecord()->getTickSize());
        $this->assertEquals(1.0, $getSymbolResponse->getSymbolRecord()->getTickValue());
        $this->assertEquals(1272446136891, $getSymbolResponse->getSymbolRecord()->getTime());
        $this->assertEquals('Thu May 23 12:23:44 EDT 2013', $getSymbolResponse->getSymbolRecord()->getTimeString());
        $this->assertEquals(true, $getSymbolResponse->getSymbolRecord()->isTrailingEnabled());
        $this->assertEquals(21, $getSymbolResponse->getSymbolRecord()->getType());
    }
}
