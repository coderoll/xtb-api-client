<?php

namespace Coderoll\XtbApiClient\Response;

/**
 * Class that contains response of Logout payload
 */
class LogoutResponse
{
    /**
     * Status if login was successful
     *
     * @var bool
     */
    private $status;

    /**
     * Constructor
     */
    public function __construct(bool $status)
    {
        $this->status = $status;
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
     * Create Response object from JSON
     *
     * @param string $json
     *
     * @return static
     */
    public static function createFromJson(string $json): self
    {
        $data = json_decode($json, true);

        return new self((bool) $data['status']);
    }
}
