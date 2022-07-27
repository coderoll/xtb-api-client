<?php

namespace Coderoll\XtbApiClient\Payload;

/**
 * Abstract Class for Payload
 */
abstract class AbstractPayload
{
    /**
     * Array of arguments used in payload
     *
     * @var string[]
     */
    protected $arguments;

    /**
     * Get Command
     *
     * @return string
     */
    abstract public function getCommand(): string;

    /**
     * Get Arguments
     *
     * @return array|null
     */
    public function getArguments(): ?array
    {
        return $this->arguments;
    }

    /**
     * Convert to object to JSON
     *
     * @return string
     */
    public function toJson(): string
    {
        $data['command'] = $this->getCommand();

        if ($this->getArguments() !== null) {
            $data['arguments'] = $this->getArguments();
        }

        return json_encode($data);
    }

    /**
     * Magic Method for converting to string
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
