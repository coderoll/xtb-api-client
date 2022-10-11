<?php

namespace Coderoll\XtbApiClient\Response\Data;

class SymbolRecord
{
    /**
     * @var float
     */
    private $ask;

    /**
     * @var float
     */
    private $bid;

    /**
     * @var string
     */
    private $categoryName;

    /**
     * @var int
     */
    private $contractSize;

    /**
     * @var string
     */
    private $currency;

    /**
     * @var bool
     */
    private $currencyPair;

    /**
     * @var string
     */
    private $currencyProfit;

    /**
     * @var string
     */
    private $description;

    /**
     * @var int|null
     */
    private $expiration;

    /**
     * @var string
     */
    private $groupName;

    /**
     * @var float
     */
    private $high;

    /**
     * @var int
     */
    private $initialMargin;

    /**
     * @var int
     */
    private $instantMaxVolume;

    /**
     * @var float
     */
    private $leverage;

    /**
     * @var bool
     */
    private $longOnly;

    /**
     * @var float
     */
    private $lotMax;

    /**
     * @var float
     */
    private $lotMin;

    /**
     * @var float
     */
    private $lotStep;

    /**
     * @var float
     */
    private $low;

    /**
     * @var int
     */
    private $marginHedged;

    /**
     * @var bool
     */
    private $marginHedgedStrong;

    /**
     * @var int|null
     */
    private $marginMaintenance;

    /**
     * @var int
     */
    private $marginMode;

    /**
     * @var float
     */
    private $percentage;

    /**
     * @var int|null
     */
    private $pipsPrecision;

    /**
     * @var int
     */
    private $precision;

    /**
     * @var int
     */
    private $profitMode;

    /**
     * @var int
     */
    private $quoteId;

    /**
     * @var bool
     */
    private $shortSelling;

    /**
     * @var float
     */
    private $spreadRaw;

    /**
     * @var float
     */
    private $spreadTable;

    /**
     * @var int|null
     */
    private $starting;

    /**
     * @var int
     */
    private $stepRuleId;

    /**
     * @var int
     */
    private $stopsLevel;

    /**
     * @var int
     */
    private $swapRollover3Days;

    /**
     * @var bool
     */
    private $swapEnable;

    /**
     * @var float
     */
    private $swapLong;

    /**
     * @var float
     */
    private $swapShort;

    /**
     * @var int
     */
    private $swapType;

    /**
     * @var string
     */
    private $symbol;

    /**
     * @var float
     */
    private $tickSize;

    /**
     * @var float
     */
    private $tickValue;

    /**
     * @var int
     */
    private $time;

    /**
     * @var string
     */
    private $timeString;

    /**
     * @var bool
     */
    private $trailingEnabled;

    /**
     * @var int
     */
    private $type;

    public function __construct(
        float $ask,
        float $bid,
        string $categoryName,
        int $contractSize,
        string $currency,
        bool $currencyPair,
        string $currencyProfit,
        string $description,
        ?int $expiration,
        string $groupName,
        float $high,
        int $initialMargin,
        int $instantMaxVolume,
        float $leverage,
        bool $longOnly,
        float $lotMax,
        float $lotMin,
        float $lotStep,
        float $low,
        int $marginHedged,
        bool $marginHedgedStrong,
        ?int $marginMaintenance,
        int $marginMode,
        float $percentage,
        ?int $pipsPrecision,
        int $precision,
        int $profitMode,
        int $quoteId,
        bool $shortSelling,
        float $spreadRaw,
        float $spreadTable,
        ?int $starting,
        int $stepRuleId,
        int $stopsLevel,
        int $swapRollover3Days,
        bool $swapEnable,
        float $swapLong,
        float $swapShort,
        int $swapType,
        string $symbol,
        float $tickSize,
        float $tickValue,
        int $time,
        string $timeString,
        bool $trailingEnabled,
        int $type
    ) {
        $this->ask = $ask;
        $this->bid = $bid;
        $this->categoryName = $categoryName;
        $this->contractSize = $contractSize;
        $this->currency = $currency;
        $this->currencyPair = $currencyPair;
        $this->currencyProfit = $currencyProfit;
        $this->description = $description;
        $this->expiration = $expiration;
        $this->groupName = $groupName;
        $this->high = $high;
        $this->initialMargin = $initialMargin;
        $this->instantMaxVolume = $instantMaxVolume;
        $this->leverage = $leverage;
        $this->longOnly = $longOnly;
        $this->lotMax = $lotMax;
        $this->lotMin = $lotMin;
        $this->lotStep = $lotStep;
        $this->low = $low;
        $this->marginHedged = $marginHedged;
        $this->marginHedgedStrong = $marginHedgedStrong;
        $this->marginMaintenance = $marginMaintenance;
        $this->marginMode = $marginMode;
        $this->percentage = $percentage;
        $this->pipsPrecision = $pipsPrecision;
        $this->precision = $precision;
        $this->profitMode = $profitMode;
        $this->quoteId = $quoteId;
        $this->shortSelling = $shortSelling;
        $this->spreadRaw = $spreadRaw;
        $this->spreadTable = $spreadTable;
        $this->starting = $starting;
        $this->stepRuleId = $stepRuleId;
        $this->stopsLevel = $stopsLevel;
        $this->swapRollover3Days = $swapRollover3Days;
        $this->swapEnable = $swapEnable;
        $this->swapLong = $swapLong;
        $this->swapShort = $swapShort;
        $this->swapType = $swapType;
        $this->symbol = $symbol;
        $this->tickSize = $tickSize;
        $this->tickValue = $tickValue;
        $this->time = $time;
        $this->timeString = $timeString;
        $this->trailingEnabled = $trailingEnabled;
        $this->type = $type;
    }

    /**
     * @return float
     */
    public function getAsk(): float
    {
        return $this->ask;
    }

    /**
     * @return float
     */
    public function getBid(): float
    {
        return $this->bid;
    }

    /**
     * @return string
     */
    public function getCategoryName(): string
    {
        return $this->categoryName;
    }

    /**
     * @return int
     */
    public function getContractSize(): int
    {
        return $this->contractSize;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @return bool
     */
    public function isCurrencyPair(): bool
    {
        return $this->currencyPair;
    }

    /**
     * @return string
     */
    public function getCurrencyProfit(): string
    {
        return $this->currencyProfit;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return int|null
     */
    public function getExpiration(): ?int
    {
        return $this->expiration;
    }

    /**
     * @return string
     */
    public function getGroupName(): string
    {
        return $this->groupName;
    }

    /**
     * @return float
     */
    public function getHigh(): float
    {
        return $this->high;
    }

    /**
     * @return int
     */
    public function getInitialMargin(): int
    {
        return $this->initialMargin;
    }

    /**
     * @return int
     */
    public function getInstantMaxVolume(): int
    {
        return $this->instantMaxVolume;
    }

    /**
     * @return float
     */
    public function getLeverage(): float
    {
        return $this->leverage;
    }

    /**
     * @return bool
     */
    public function isLongOnly(): bool
    {
        return $this->longOnly;
    }

    /**
     * @return float
     */
    public function getLotMax(): float
    {
        return $this->lotMax;
    }

    /**
     * @return float
     */
    public function getLotMin(): float
    {
        return $this->lotMin;
    }

    /**
     * @return float
     */
    public function getLotStep(): float
    {
        return $this->lotStep;
    }

    /**
     * @return float
     */
    public function getLow(): float
    {
        return $this->low;
    }

    /**
     * @return int
     */
    public function getMarginHedged(): int
    {
        return $this->marginHedged;
    }

    /**
     * @return bool
     */
    public function isMarginHedgedStrong(): bool
    {
        return $this->marginHedgedStrong;
    }

    /**
     * @return int|null
     */
    public function getMarginMaintenance(): ?int
    {
        return $this->marginMaintenance;
    }

    /**
     * @return int
     */
    public function getMarginMode(): int
    {
        return $this->marginMode;
    }

    /**
     * @return float
     */
    public function getPercentage(): float
    {
        return $this->percentage;
    }

    /**
     * @return int|null
     */
    public function getPipsPrecision(): ?int
    {
        return $this->pipsPrecision;
    }

    /**
     * @return int
     */
    public function getPrecision(): int
    {
        return $this->precision;
    }

    /**
     * @return int
     */
    public function getProfitMode(): int
    {
        return $this->profitMode;
    }

    /**
     * @return int
     */
    public function getQuoteId(): int
    {
        return $this->quoteId;
    }

    /**
     * @return bool
     */
    public function isShortSelling(): bool
    {
        return $this->shortSelling;
    }

    /**
     * @return float
     */
    public function getSpreadRaw(): float
    {
        return $this->spreadRaw;
    }

    /**
     * @return float
     */
    public function getSpreadTable(): float
    {
        return $this->spreadTable;
    }

    /**
     * @return int|null
     */
    public function getStarting(): ?int
    {
        return $this->starting;
    }

    /**
     * @return int
     */
    public function getStepRuleId(): int
    {
        return $this->stepRuleId;
    }

    /**
     * @return int
     */
    public function getStopsLevel(): int
    {
        return $this->stopsLevel;
    }

    /**
     * @return int
     */
    public function getSwapRollover3Days(): int
    {
        return $this->swapRollover3Days;
    }

    /**
     * @return bool
     */
    public function isSwapEnable(): bool
    {
        return $this->swapEnable;
    }

    /**
     * @return float
     */
    public function getSwapLong(): float
    {
        return $this->swapLong;
    }

    /**
     * @return float
     */
    public function getSwapShort(): float
    {
        return $this->swapShort;
    }

    /**
     * @return int
     */
    public function getSwapType(): int
    {
        return $this->swapType;
    }

    /**
     * @return string
     */
    public function getSymbol(): string
    {
        return $this->symbol;
    }

    /**
     * @return float
     */
    public function getTickSize(): float
    {
        return $this->tickSize;
    }

    /**
     * @return float
     */
    public function getTickValue(): float
    {
        return $this->tickValue;
    }

    /**
     * @return int
     */
    public function getTime(): int
    {
        return $this->time;
    }

    /**
     * @return string
     */
    public function getTimeString(): string
    {
        return $this->timeString;
    }

    /**
     * @return bool
     */
    public function isTrailingEnabled(): bool
    {
        return $this->trailingEnabled;
    }

    /**
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }
}
