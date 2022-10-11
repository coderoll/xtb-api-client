<?php

namespace Coderoll\XtbApiClient\Tests\Response;

use Coderoll\XtbApiClient\Response\GetTradesResponse;
use PHPUnit\Framework\TestCase;

class GetTradesResponseTest extends TestCase
{
    /**
     * @covers GetTradesResponse
     */
    public function testCreateFromJson()
    {
        $json = <<<JSON
{
	"status": true,
	"returnData": {
            "close_price": 1.3256,
            "close_time": null,
            "close_timeString": null,
            "closed": false,
            "cmd": 0,
            "comment": "Web Trader",
            "commission": 0.0,
            "customComment": "Some text",
            "digits": 4,
            "expiration": null,
            "expirationString": null,
            "margin_rate": 0.0,
            "offset": 0,
            "open_price": 1.4,
            "open_time": 1272380927000,
            "open_timeString": "Fri Jan 11 10:03:36 CET 2013",
            "order": 7497776,
            "order2": 1234567,
            "position": 1234567,
            "profit": -2196.44,
            "sl": 0.0,
            "storage": -4.46,
            "symbol": "EURUSD",
            "timestamp": 1272540251000,
            "tp": 0.0,
            "volume": 0.10
    }
}
JSON;

        $getTradesResponse = GetTradesResponse::createFromJson($json);
        $this->assertEquals(true, $getTradesResponse->isStatus());
        $this->assertEquals(1.3256, $getTradesResponse->getReturnData()['close_price']);
        $this->assertEquals(null, $getTradesResponse->getReturnData()['close_time']);
        $this->assertEquals(null, $getTradesResponse->getReturnData()['close_timeString']);
        $this->assertEquals(false, $getTradesResponse->getReturnData()['closed']);
        $this->assertEquals(0, $getTradesResponse->getReturnData()['cmd']);
        $this->assertEquals('Web Trader', $getTradesResponse->getReturnData()['comment']);
        $this->assertEquals(0.0, $getTradesResponse->getReturnData()['commission']);
        $this->assertEquals('Some text', $getTradesResponse->getReturnData()['customComment']);
        $this->assertEquals(4, $getTradesResponse->getReturnData()['digits']);
        $this->assertEquals(null, $getTradesResponse->getReturnData()['expiration']);
        $this->assertEquals(null, $getTradesResponse->getReturnData()['expirationString']);
        $this->assertEquals(0.0, $getTradesResponse->getReturnData()['margin_rate']);
        $this->assertEquals(0, $getTradesResponse->getReturnData()['offset']);
        $this->assertEquals(1.4, $getTradesResponse->getReturnData()['open_price']);
        $this->assertEquals(1272380927000, $getTradesResponse->getReturnData()['open_time']);
        $this->assertEquals('Fri Jan 11 10:03:36 CET 2013', $getTradesResponse->getReturnData()['open_timeString']);
        $this->assertEquals(7497776, $getTradesResponse->getReturnData()['order']);
        $this->assertEquals(1234567, $getTradesResponse->getReturnData()['order2']);
        $this->assertEquals(1234567, $getTradesResponse->getReturnData()['position']);
        $this->assertEquals(-2196.44, $getTradesResponse->getReturnData()['profit']);
        $this->assertEquals(0.0, $getTradesResponse->getReturnData()['sl']);
        $this->assertEquals(-4.46, $getTradesResponse->getReturnData()['storage']);
        $this->assertEquals('EURUSD', $getTradesResponse->getReturnData()['symbol']);
        $this->assertEquals(1272540251000, $getTradesResponse->getReturnData()['timestamp']);
        $this->assertEquals(0.0, $getTradesResponse->getReturnData()['tp']);
        $this->assertEquals(0.10, $getTradesResponse->getReturnData()['volume']);
    }
}
