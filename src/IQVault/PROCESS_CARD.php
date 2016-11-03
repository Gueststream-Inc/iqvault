<?php

namespace Gueststream\PMS\IQWare\IQVault;

class PROCESS_CARD
{

    /**
     * @var int $PropertyGUID
     */
    protected $PropertyGUID = null;

    /**
     * @var string $VaultTokenGuid
     */
    protected $VaultTokenGuid = null;

    /**
     * @var int $CVV2
     */
    protected $CVV2 = null;

    /**
     * @var int $AccountNo
     */
    protected $AccountNo = null;

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var float $CreditCardFeeAmount
     */
    protected $CreditCardFeeAmount = null;

    /**
     * @var int $BillingZipCode
     */
    protected $BillingZipCode = null;

    /**
     * @var string $BillingStreetAddress
     */
    protected $BillingStreetAddress = null;

    /**
     * @var string $Username
     */
    protected $Username = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @var int $TrnType
     */
    protected $TrnType = null;

    /**
     * @param int $PropertyGUID
     * @param string $VaultTokenGuid
     * @param int $CVV2
     * @param int $AccountNo
     * @param float $Amount
     * @param float $CreditCardFeeAmount
     * @param int $BillingZipCode
     * @param string $BillingStreetAddress
     * @param string $Username
     * @param string $Password
     * @param int $TrnType
     */
    public function __construct($PropertyGUID, $VaultTokenGuid, $CVV2, $AccountNo, $Amount, $CreditCardFeeAmount, $BillingZipCode, $BillingStreetAddress, $Username, $Password, $TrnType)
    {
        $this->PropertyGUID = $PropertyGUID;
        $this->VaultTokenGuid = $VaultTokenGuid;
        $this->CVV2 = $CVV2;
        $this->AccountNo = $AccountNo;
        $this->Amount = $Amount;
        $this->CreditCardFeeAmount = $CreditCardFeeAmount;
        $this->BillingZipCode = $BillingZipCode;
        $this->BillingStreetAddress = $BillingStreetAddress;
        $this->Username = $Username;
        $this->Password = $Password;
        $this->TrnType = $TrnType;
    }

    /**
     * @return int
     */
    public function getPropertyGUID()
    {
        return $this->PropertyGUID;
    }

    /**
     * @param int $PropertyGUID
     * @return \Gueststream\PMS\IQWare\IQVault\PROCESS_CARD
     */
    public function setPropertyGUID($PropertyGUID)
    {
        $this->PropertyGUID = $PropertyGUID;
        return $this;
    }

    /**
     * @return string
     */
    public function getVaultTokenGuid()
    {
        return $this->VaultTokenGuid;
    }

    /**
     * @param string $VaultTokenGuid
     * @return \Gueststream\PMS\IQWare\IQVault\PROCESS_CARD
     */
    public function setVaultTokenGuid($VaultTokenGuid)
    {
        $this->VaultTokenGuid = $VaultTokenGuid;
        return $this;
    }

    /**
     * @return int
     */
    public function getCVV2()
    {
        return $this->CVV2;
    }

    /**
     * @param int $CVV2
     * @return \Gueststream\PMS\IQWare\IQVault\PROCESS_CARD
     */
    public function setCVV2($CVV2)
    {
        $this->CVV2 = $CVV2;
        return $this;
    }

    /**
     * @return int
     */
    public function getAccountNo()
    {
        return $this->AccountNo;
    }

    /**
     * @param int $AccountNo
     * @return \Gueststream\PMS\IQWare\IQVault\PROCESS_CARD
     */
    public function setAccountNo($AccountNo)
    {
        $this->AccountNo = $AccountNo;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * @param float $Amount
     * @return \Gueststream\PMS\IQWare\IQVault\PROCESS_CARD
     */
    public function setAmount($Amount)
    {
        $this->Amount = $Amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getCreditCardFeeAmount()
    {
        return $this->CreditCardFeeAmount;
    }

    /**
     * @param float $CreditCardFeeAmount
     * @return \Gueststream\PMS\IQWare\IQVault\PROCESS_CARD
     */
    public function setCreditCardFeeAmount($CreditCardFeeAmount)
    {
        $this->CreditCardFeeAmount = $CreditCardFeeAmount;
        return $this;
    }

    /**
     * @return int
     */
    public function getBillingZipCode()
    {
        return $this->BillingZipCode;
    }

    /**
     * @param int $BillingZipCode
     * @return \Gueststream\PMS\IQWare\IQVault\PROCESS_CARD
     */
    public function setBillingZipCode($BillingZipCode)
    {
        $this->BillingZipCode = $BillingZipCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillingStreetAddress()
    {
        return $this->BillingStreetAddress;
    }

    /**
     * @param string $BillingStreetAddress
     * @return \Gueststream\PMS\IQWare\IQVault\PROCESS_CARD
     */
    public function setBillingStreetAddress($BillingStreetAddress)
    {
        $this->BillingStreetAddress = $BillingStreetAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->Username;
    }

    /**
     * @param string $Username
     * @return \Gueststream\PMS\IQWare\IQVault\PROCESS_CARD
     */
    public function setUsername($Username)
    {
        $this->Username = $Username;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * @param string $Password
     * @return \Gueststream\PMS\IQWare\IQVault\PROCESS_CARD
     */
    public function setPassword($Password)
    {
        $this->Password = $Password;
        return $this;
    }

    /**
     * @return int
     */
    public function getTrnType()
    {
        return $this->TrnType;
    }

    /**
     * @param int $TrnType
     * @return \Gueststream\PMS\IQWare\IQVault\PROCESS_CARD
     */
    public function setTrnType($TrnType)
    {
        $this->TrnType = $TrnType;
        return $this;
    }
}
