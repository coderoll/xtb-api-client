<?php

namespace Coderoll\XtbApiClient\Tests\Response;

use Coderoll\XtbApiClient\Response\TradeTransactionStatusResponse;
use PHPUnit\Framework\TestCase;

class TradeTransactionStatusResponseTest extends TestCase
{
    /**
     * @covers TradeTransactionStatusResponse
     */
    public function testCreateFromJson()
    {
        $json = <<<JSON
{
	"status": true,
	"returnData": {
		"ask": 1.392,
		"bid": 1.392,
		"customComment": "Some text",
		"message": null,
		"order": 43,
		"requestStatus": 3
	}	
}
JSON;

        $tradeTransactionStatus = TradeTransactionStatusResponse::createFromJson($json);
        $this->assertEquals(true, $tradeTransactionStatus->isStatus());
        $this->assertEquals([
            'ask' => 1.392,
            'bid' => 1.392,
            'customComment' => 'Some text',
            'message' => null,
            'order' => 43,
            'requestStatus' => 3,
        ], $tradeTransactionStatus->getReturnData());
    }
}
