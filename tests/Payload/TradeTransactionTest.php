<?php

namespace Coderoll\XtbApiClient\Tests\Payload;

use Coderoll\XtbApiClient\Payload\TradeTransaction;
use Coderoll\XtbApiClient\Payload\Data\TradeTransInfo;
use PHPUnit\Framework\TestCase;

class TradeTransactionTest extends TestCase
{
    /**
     * @covers TradeTransaction
     * @covers TradeTransInfo
     */
    public function testToJson()
    {
        $json = <<<JSON
{
	"command": "tradeTransaction",
	"arguments": {
		"tradeTransInfo": {
            "cmd": 2,
            "customComment": "Some text",
            "expiration": 1462006335000,
            "offset": 0,
            "order": 82188055,
            "price": 1.12,
            "sl": 0.0,
            "symbol": "EURUSD",
            "tp": 0.0,
            "type": 0,
            "volume": 5.0
        }
	}
}
JSON;

        $tradeTransInfo = new TradeTransInfo();
        $tradeTransInfo
            ->setCmd(2)
            ->setCustomComment('Some text')
            ->setExpiration(1462006335000)
            ->setOffset(0)
            ->setOrder(82188055)
            ->setPrice(1.12)
            ->setSl(0.0)
            ->setSymbol('EURUSD')
            ->setTp(0.0)
            ->setType(0)
            ->setVolume(5.0)
        ;

        $tradeTransaction = new TradeTransaction($tradeTransInfo);
        $result = $tradeTransaction->toJson();

        $this->assertJsonStringEqualsJsonString($json, $result);
    }
}
