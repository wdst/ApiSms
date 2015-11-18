<?php

namespace ApiSms\Classes;

abstract class AbstractResponse
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var array
     */
    protected $descriptions = [];

    /**
     * @param string $code
     */
    public function __construct($code)
    {
        $this->code = $code;
    }

    /**
     * @return null|string
     */
    public function getDescription()
    {
        if (isset($this->descriptions[$this->code])) {
            return $this->descriptions[$this->code];
        }
        return null;
    }
}
