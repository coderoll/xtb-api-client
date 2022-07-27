<?php

namespace Coderoll\XtbApiClient\Response;

/**
 * Class that contains response of Login payload
 */
class LoginResponse
{
    /**
     * Status if login was successful
     *
     * @var bool
     */
    private $status;

    /**
     * Session ID
     *
     * @var string
     */
    private $streamSessionId;

    /**
     * Constructor
     */
    public function __construct(bool $status, string $streamSessionId)
    {
        $this->status = $status;
        $this->streamSessionId = $streamSessionId;
    }

    /**
     * Get status
     *
     * @return bool
     */
    public function isStatus(): bool
    {
        return $this->status;
    }

    /**
     * Get Stream Session ID
     *
     * @return string
     */
    public function getStreamSessionId(): string
    {
        return $this->streamSessionId;
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

        return new self((bool) $data['status'], $data['streamSessionId']);
    }
}
