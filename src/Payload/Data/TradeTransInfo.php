<?php

namespace Coderoll\XtbApiClient\Payload\Data;

class TradeTransInfo
{
    public const CMD_BUY = 0;
    public const CMD_SELL = 1;
    public const CMD_BUY_LIMIT = 2;
    public const CMD_SELL_LIMIT = 3;
    public const CMD_BUY_STOP = 4;
    public const CMD_SELL_STOP = 5;
    public const CMD_BALANCE = 6;
    public const CMD_CREDIT = 7;

    public const TYPE_OPEN = 0;
    public const TYPE_PENDING = 1;
    public const TYPE_CLOSE = 2;
    public const TYPE_MODIFY = 3;
    public const TYPE_DELETE = 4;

    /**
     * @var int
     */
    private $cmd;

    /**
     * @var string
     */
    private $customComment;

    /**
     * @var int
     */
    private $expiration;

    /**
     * @var int
     */
    private $offset;

    /**
     * @var int
     */
    private $order;

    /**
     * @var float
     */
    private $price;

    /**
     * @var float
     */
    private $sl;

    /**
     * @var string
     */
    private $symbol;

    /**
     * @var float
     */
    private $tp;

    /**
     * @var int
     */
    private $type;

    /**
     * @var float
     */
    private $volume;

    /**
     * @param int $cmd
     *
     * @return TradeTransInfo
     */
    public function setCmd(int $cmd): TradeTransInfo
    {
        $this->cmd = $cmd;

        return $this;
    }

    /**
     * @param string $customComment
     *
     * @return TradeTransInfo
     */
    public function setCustomComment(string $customComment): TradeTransInfo
    {
        $this->customComment = $customComment;

        return $this;
    }

    /**
     * @param int $expiration
     *
     * @return TradeTransInfo
     */
    public function setExpiration(int $expiration): TradeTransInfo
    {
        $this->expiration = $expiration;

        return $this;
    }

    /**
     * @param int $offset
     *
     * @return TradeTransInfo
     */
    public function setOffset(int $offset): TradeTransInfo
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $order
     *
     * @return TradeTransInfo
     */
    public function setOrder(int $order): TradeTransInfo
    {
        $this->order = $order;

        return $this;
    }

    /**
     * @param float $price
     *
     * @return TradeTransInfo
     */
    public function setPrice(float $price): TradeTransInfo
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @param float $sl
     *
     * @return TradeTransInfo
     */
    public function setSl(float $sl): TradeTransInfo
    {
        $this->sl = $sl;

        return $this;
    }

    /**
     * @param string $symbol
     *
     * @return TradeTransInfo
     */
    public function setSymbol(string $symbol): TradeTransInfo
    {
        $this->symbol = $symbol;

        return $this;
    }

    /**
     * @param float $tp
     *
     * @return TradeTransInfo
     */
    public function setTp(float $tp): TradeTransInfo
    {
        $this->tp = $tp;

        return $this;
    }

    /**
     * @param int $type
     *
     * @return TradeTransInfo
     */
    public function setType(int $type): TradeTransInfo
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @param float $volume
     *
     * @return TradeTransInfo
     */
    public function setVolume(float $volume): TradeTransInfo
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * Get Arguments
     *
     * @return array|null
     */
    public function getArguments(): ?array
    {
        $parameters = [];

        if (isset($this->cmd)) {
            $parameters['cmd'] = $this->cmd;
        }

        if (isset($this->customComment)) {
            $parameters['customComment'] = $this->customComment;
        }
        if (isset($this->expiration)) {
            $parameters['expiration'] = $this->expiration;
        }
        if (isset($this->offset)) {
            $parameters['offset'] = $this->offset;
        }
        if (isset($this->order)) {
            $parameters['order'] = $this->order;
        }
        if (isset($this->price)) {
            $parameters['price'] = $this->price;
        }
        if (isset($this->sl)) {
            $parameters['sl'] = $this->sl;
        }
        if (isset($this->symbol)) {
            $parameters['symbol'] = $this->symbol;
        }
        if (isset($this->tp)) {
            $parameters['tp'] = $this->tp;
        }
        if (isset($this->type)) {
            $parameters['type'] = $this->type;
        }
        if (isset($this->volume)) {
            $parameters['volume'] = $this->volume;
        }

        return $parameters;
    }
}