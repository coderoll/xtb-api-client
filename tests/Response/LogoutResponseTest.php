<?php

namespace Coderoll\XtbApiClient\Tests\Response;

use Coderoll\XtbApiClient\Response\LogoutResponse;
use PHPUnit\Framework\TestCase;

class LogoutResponseTest extends TestCase
{
    /**
     * @covers LogoutResponse
     */
    public function testCreateFromJson()
    {
        $json = <<<JSON
{
	"status": true
}
JSON;

        $logoutResponse = LogoutResponse::createFromJson($json);
        $this->assertEquals(true, $logoutResponse->isStatus());
    }
}
