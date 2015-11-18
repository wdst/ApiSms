<?php

namespace wdst\apisms;

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
