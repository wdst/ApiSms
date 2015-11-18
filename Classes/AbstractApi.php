<?php

namespace wdst\apisms;

abstract class AbstractApi implements ApiInterface{
    
   
    public function __construct(AuthInterface $auth)
    {
        $this->auth = $auth;
        $this->auth->setContext($this);
    }
    
    abstract public function smsSend(AbstractSms $sms);
    
    abstract public function request($method, $params = []);
    
    abstract public function getClient();
    
    abstract public function setClient(ClientInterface $client);
}