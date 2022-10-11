<?php

namespace Coderoll\XtbApiClient\Response;

use Coderoll\XtbApiClient\Exception\InvalidParametersException;

/**
 * Class that contains response of TradeTransaction payload
 */
class TradeTransactionResponse
{
    /**
     * Status if request was successful
     *
     * @var bool
     */
    private $status;

    /**
     * Array of Order number
     *
     * @var int
     */
    private $order;

    /**
     * Constructor
     */
    public function __construct(bool $status, int $order)
    {
        $this->status = $status;
        $this->order = $order;
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
     * Get Order number
     *
     * @return int
     */
    public function getOrder(): int
    {
        return $this->order;
    }

    /**
     * Create Response object from JSON
     *
     * @param string $json
     *
     * @return static
     *
     * @throws InvalidParametersException
     */
    public static function createFromJson(string $json): self
    {
        $data = json_decode($json, true);
        $status = (bool) $data['status'];
        if ($status === false) {
            $errorCode = $data['errorCode'];
            $errorMessage = $data['errorDescr'];
            throw new InvalidParametersException(sprintf(
                '%s: %s',
                $errorCode,
                $errorMessage
            ));
        }

        return new self($status, $data['returnData']['order']);
    }
}
