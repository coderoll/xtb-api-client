<?php

namespace Coderoll\XtbApiClient\Payload;

/**
 * GetTrades Payload
 */
class GetTrades extends AbstractPayload
{
    /**
     * Constructor
     */
    public function __construct(bool $openedOnly)
    {
        $this->arguments['openedOnly'] = $openedOnly;
    }

    /**
     * Get Command Name
     *
     * @return string
     */
    public function getCommand(): string
    {
        return 'getTrades';
    }
}
