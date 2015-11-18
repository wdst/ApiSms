<?php

namespace wdst\apisms;

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
