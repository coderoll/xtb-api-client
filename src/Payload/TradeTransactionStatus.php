<?php

namespace Coderoll\XtbApiClient\Payload;

/**
 * TradeTransactionStatus Payload
 */
class TradeTransactionStatus extends AbstractPayload
{
    /**
     * Constructor
     */
    public function __construct(int $order)
    {
        $this->arguments['order'] = $order;
    }

    /**
     * Get Command Name
     *
     * @return string
     */
    public function getCommand(): string
    {
        return 'tradeTransactionStatus';
    }
}
