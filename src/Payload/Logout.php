<?php

namespace Coderoll\XtbApiClient\Payload;

/**
 * Logout Payload
 */
class Logout extends AbstractPayload
{
    /**
     * @inheritDoc
     *
     * @return string
     */
    public function getCommand(): string
    {
        return 'logout';
    }
}
