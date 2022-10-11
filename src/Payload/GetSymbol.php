<?php

namespace Coderoll\XtbApiClient\Payload;

/**
 * GetSymbol Payload
 */
class GetSymbol extends AbstractPayload
{
    /**
     * Constructor
     */
    public function __construct(string $symbol)
    {
        $this->arguments['symbol'] = $symbol;
    }

    /**
     * Get Command Name
     *
     * @return string
     */
    public function getCommand(): string
    {
        return 'getSymbol';
    }
}
