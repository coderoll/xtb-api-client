<?php

namespace Coderoll\XtbApiClient\Response;

/**
 * Class that contains response of TradeTransactionStatus payload
 */
class TradeTransactionStatusResponse
{
    public const REQUEST_STATUS_ERROR = 0;
    public const REQUEST_STATUS_PENDING = 1;
    public const REQUEST_STATUS_ACCEPTED = 3;
    public const REQUEST_STATUS_REJECTED = 4;

    /**
     * Status if request was successful
     *
     * @var bool
     */
    private $status;

    /**
     * Array of Return Data
     *
     * @var array
     */
    private $returnData;

    /**
     * Constructor
     */
    public function __construct(bool $status, array $returnData)
    {
        $this->status = $status;
        $this->returnData = $returnData;
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
     * Get Return Data
     *
     * @return array
     */
    public function getReturnData(): array
    {
        return $this->returnData;
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

        return new self((bool) $data['status'], $data['returnData']);
    }
}
