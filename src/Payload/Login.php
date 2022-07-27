<?php

namespace Coderoll\XtbApiClient\Payload;

/**
 * Login Payload
 */
class Login extends AbstractPayload
{
    /**
     * Constructor
     */
    public function __construct(string $userId, string $password, string $appId = null, string $appName = null)
    {
        $this->arguments['userId'] = $userId;
        $this->arguments['password'] = $password;
        if ($appId !== null) {
            $this->arguments['appId'] = $appId;
        }
        if ($appName !== null) {
            $this->arguments['appName'] = $appName;
        }
    }

    /**
     * @inheritDoc
     *
     * @return string
     */
    public function getCommand(): string
    {
        return 'login';
    }
}
