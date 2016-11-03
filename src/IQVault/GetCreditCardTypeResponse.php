<?php

namespace Gueststream\PMS\IQWare\IQVault;

class GetCreditCardTypeResponse
{

    /**
     * @var int $GetCreditCardTypeResult
     */
    protected $GetCreditCardTypeResult = null;

    /**
     * @param int $GetCreditCardTypeResult
     */
    public function __construct($GetCreditCardTypeResult)
    {
        $this->GetCreditCardTypeResult = $GetCreditCardTypeResult;
    }

    /**
     * @return int
     */
    public function getGetCreditCardTypeResult()
    {
        return $this->GetCreditCardTypeResult;
    }

    /**
     * @param int $GetCreditCardTypeResult
     * @return \Gueststream\PMS\IQWare\IQVault\GetCreditCardTypeResponse
     */
    public function setGetCreditCardTypeResult($GetCreditCardTypeResult)
    {
        $this->GetCreditCardTypeResult = $GetCreditCardTypeResult;
        return $this;
    }
}
