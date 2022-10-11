<?php

namespace Coderoll\XtbApiClient\Tests\Response;

use Coderoll\XtbApiClient\Response\LoginResponse;
use PHPUnit\Framework\TestCase;

class LoginResponseTest extends TestCase
{
    /**
     * @covers LoginResponse
     */
    public function testCreateFromJson()
    {
        $json = <<<JSON
{
	"status": true,
	"streamSessionId": "8469308861804289383"
}
JSON;

        $loginResponse = LoginResponse::createFromJson($json);

        $this->assertEquals(true, $loginResponse->isStatus());
        $this->assertEquals('8469308861804289383', $loginResponse->getStreamSessionId());
    }
}
