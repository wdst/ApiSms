<?php

namespace wdst\apisms\Classes;

abstract class AbstractApi implements ApiInterface{
    
    protected $auth;
    protected $client;
    
    public function __construct(AuthInterface $auth)
    {
        $this->auth = $auth;
        $this->auth->setContext($this);
    }
    
    abstract public function smsSend(AbstractSms $sms);
    
    abstract public function request($method, $params = []);
    
    abstract public function getClient();
    
    abstract public function setClient();
    
    
    abstract public function smsStatus();
    
    abstract public function smsCost();
    
    abstract public function myBalance();
}