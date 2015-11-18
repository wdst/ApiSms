<?php

namespace wdst\apisms\Classes;

interface AuthInterface
{
    /**
     * @return array
     */
    public function getAuthParams();

    /**
     * @return Api
     */
    public function getContext();

    /**
     * @param Api $context
     */
    public function setContext(Api $context);
}
