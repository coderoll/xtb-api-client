<?php

namespace Coderoll\XtbApiClient\Payload;

use Coderoll\XtbApiClient\Payload\Data\TradeTransInfo;

/**
 * TradeTransaction Payload
 */
class TradeTransaction extends AbstractPayload
{
    /**
     * @var TradeTransInfo
     */
    private $tradeTransInfo;

    /**
     * Constructor
     */
    public function __construct(TradeTransInfo $tradeTransInfo)
    {
        $this->tradeTransInfo = $tradeTransInfo;
    }

    /**
     * Get Command Name
     *
     * @return string
     */
    public function getCommand(): string
    {
        return 'tradeTransaction';
    }

    /**
     * Convert to object to JSON
     *
     * @return string
     */
    public function toJson(): string
    {
        $data['command'] = $this->getCommand();
        $data['arguments']['tradeTransInfo'] = $this->tradeTransInfo->getArguments();

        return json_encode($data);
    }
}
