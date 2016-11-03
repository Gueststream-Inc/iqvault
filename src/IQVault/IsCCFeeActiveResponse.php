<?php

namespace Gueststream\PMS\IQWare\IQVault;

class IsCCFeeActiveResponse
{

    /**
     * @var CreditCardFee $IsCCFeeActiveResult
     */
    protected $IsCCFeeActiveResult = null;

    /**
     * @param CreditCardFee $IsCCFeeActiveResult
     */
    public function __construct($IsCCFeeActiveResult)
    {
        $this->IsCCFeeActiveResult = $IsCCFeeActiveResult;
    }

    /**
     * @return CreditCardFee
     */
    public function getIsCCFeeActiveResult()
    {
        return $this->IsCCFeeActiveResult;
    }

    /**
     * @param CreditCardFee $IsCCFeeActiveResult
     * @return \Gueststream\PMS\IQWare\IQVault\IsCCFeeActiveResponse
     */
    public function setIsCCFeeActiveResult($IsCCFeeActiveResult)
    {
        $this->IsCCFeeActiveResult = $IsCCFeeActiveResult;
        return $this;
    }
}
