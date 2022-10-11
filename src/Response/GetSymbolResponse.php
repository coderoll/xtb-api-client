<?php

namespace Coderoll\XtbApiClient\Response;

use Coderoll\XtbApiClient\Response\Data\SymbolRecord;

/**
 * Class that contains response of GetSymbol payload
 */
class GetSymbolResponse
{
    /**
     * Status if request was successful
     *
     * @var bool
     */
    private $status;

    /**
     * Symbol Record data
     *
     * @var SymbolRecord
     */
    private $symbolRecord;

    /**
     * Constructor
     */
    public function __construct(bool $status, SymbolRecord $symbolRecord)
    {
        $this->status = $status;
        $this->symbolRecord = $symbolRecord;
    }

    /**
     * Get Status
     *
     * @return bool
     */
    public function isStatus(): bool
    {
        return $this->status;
    }

    /**
     * Get Symbol Record Data
     *
     * @return SymbolRecord
     */
    public function getSymbolRecord(): SymbolRecord
    {
        return $this->symbolRecord;
    }

    /**
     * Create Response object from JSON
     *
     * @param string $json
     *
     * @return static
     */
    public static function createFromJson(string $json): self
    {
        $data = json_decode($json, true);
        $symbolData = $data['returnData'];
        $symbol = new SymbolRecord(
            $symbolData['ask'],
            $symbolData['bid'],
            $symbolData['categoryName'],
            $symbolData['contractSize'],
            $symbolData['currency'],
            $symbolData['currencyPair'],
            $symbolData['currencyProfit'],
            $symbolData['description'],
            $symbolData['expiration'],
            $symbolData['groupName'],
            $symbolData['high'],
            $symbolData['initialMargin'],
            $symbolData['instantMaxVolume'],
            $symbolData['leverage'],
            $symbolData['longOnly'],
            $symbolData['lotMax'],
            $symbolData['lotMin'],
            $symbolData['lotStep'],
            $symbolData['low'],
            $symbolData['marginHedged'],
            $symbolData['marginHedgedStrong'],
            $symbolData['marginMaintenance'],
            $symbolData['marginMode'],
            $symbolData['percentage'],
            $symbolData['pipsPrecision'] ?? null,
            $symbolData['precision'],
            $symbolData['profitMode'],
            $symbolData['quoteId'],
            $symbolData['shortSelling'],
            $symbolData['spreadRaw'],
            $symbolData['spreadTable'],
            $symbolData['starting'],
            $symbolData['stepRuleId'],
            $symbolData['stopsLevel'],
            $symbolData['swap_rollover3days'],
            $symbolData['swapEnable'],
            $symbolData['swapLong'],
            $symbolData['swapShort'],
            $symbolData['swapType'],
            $symbolData['symbol'],
            $symbolData['tickSize'],
            $symbolData['tickValue'],
            $symbolData['time'],
            $symbolData['timeString'],
            $symbolData['trailingEnabled'],
            $symbolData['type']
        );

        return new self((bool) $data['status'], $symbol);
    }
}
