<?php

namespace wdst\apisms\Classes;

interface ClientInterface
{
    /**
     * @param string $method
     * @param array $params
     *
     * @return string
     */
    public function request($method, $params = []);
}
