<?php

namespace wdst\apisms\Classes;

abstract class AbstractAuth implements AuthInterface
{
    /**
     * @var Api
     */
    private $context;

    /**
     * @return array
     */
    abstract public function getAuthParams();

    /**
     * @return Api
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * @param Api $context
     */
    public function setContext(Api $context)
    {
        $this->context = $context;
    }
}
