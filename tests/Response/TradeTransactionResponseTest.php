<?php

namespace Coderoll\XtbApiClient\Tests\Response;

use Coderoll\XtbApiClient\Exception\InvalidParametersException;
use Coderoll\XtbApiClient\Response\TradeTransactionResponse;
use PHPUnit\Framework\TestCase;

class TradeTransactionResponseTest extends TestCase
{

    /**
     * @covers TradeTransactionResponse
     */
    public function testCreateFromJson()
    {
        $json = <<<JSON
{
	"status": true,
	"returnData": {
		"order": 43
	}	
}

JSON;

        $tradeTransactionResponse = TradeTransactionResponse::createFromJson($json);
        $this->assertEquals(true, $tradeTransactionResponse->isStatus());
        $this->assertEquals(43, $tradeTransactionResponse->getOrder());
    }

    /**
     * @covers TradeTransactionResponse
     */
    public function testCreateFromJsonHandlingError()
    {
        $this->expectException(InvalidParametersException::class);
        $this->expectExceptionMessage('EX000: Invalid parameters');

        $json = <<<JSON
{"status":false,"errorCode":"EX000","errorDescr":"Invalid parameters"}
JSON;

        TradeTransactionResponse::createFromJson($json);
    }
}
