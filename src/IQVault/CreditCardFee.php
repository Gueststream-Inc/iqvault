<?php

namespace Gueststream\PMS\IQWare\IQVault;

class CreditCardFee
{

    /**
     * @var float $FeeInPercent
     */
    protected $FeeInPercent = null;

    /**
     * @param float $FeeInPercent
     */
    public function __construct($FeeInPercent)
    {
        $this->FeeInPercent = $FeeInPercent;
    }

    /**
     * @return float
     */
    public function getFeeInPercent()
    {
        return $this->FeeInPercent;
    }

    /**
     * @param float $FeeInPercent
     * @return \Gueststream\PMS\IQWare\IQVault\CreditCardFee
     */
    public function setFeeInPercent($FeeInPercent)
    {
        $this->FeeInPercent = $FeeInPercent;
        return $this;
    }
}
