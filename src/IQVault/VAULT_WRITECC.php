<?php

namespace Gueststream\PMS\IQWare\IQVault;

class VAULT_WRITECC
{

    /**
     * @var int $PropertyGUID
     */
    protected $PropertyGUID = null;

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
     * @var SubFolioEnum $Folio
     */
    protected $Folio = null;

    /**
     * @var boolean $SendEmail
     */
    protected $SendEmail = null;

    /**
     * @var AccountTypeEnum $AccountType
     */
    protected $AccountType = null;

    /**
     * @var string $Username
     */
    protected $Username = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @var string $pan
     */
    protected $pan = null;

    /**
     * @var string $exp
     */
    protected $exp = null;

    /**
     * @var string $cardHolderName
     */
    protected $cardHolderName = null;

    /**
     * @var string $uid
     */
    protected $uid = null;

    /**
     * @var \DateTime $tokenExpirationDate
     */
    protected $tokenExpirationDate = null;

    /**
     * @var int $CVV2
     */
    protected $CVV2 = null;

    /**
     * @param int $PropertyGUID
     * @param int $AccountNo
     * @param float $Amount
     * @param float $CreditCardFeeAmount
     * @param int $BillingZipCode
     * @param string $BillingStreetAddress
     * @param SubFolioEnum $Folio
     * @param boolean $SendEmail
     * @param AccountTypeEnum $AccountType
     * @param string $Username
     * @param string $Password
     * @param string $pan
     * @param string $exp
     * @param string $cardHolderName
     * @param string $uid
     * @param \DateTime $tokenExpirationDate
     * @param int $CVV2
     */
    public function __construct($PropertyGUID, $AccountNo, $Amount, $CreditCardFeeAmount, $BillingZipCode, $BillingStreetAddress, $Folio, $SendEmail, $AccountType, $Username, $Password, $pan, $exp, $cardHolderName, $uid, \DateTime $tokenExpirationDate, $CVV2)
    {
        $this->PropertyGUID = $PropertyGUID;
        $this->AccountNo = $AccountNo;
        $this->Amount = $Amount;
        $this->CreditCardFeeAmount = $CreditCardFeeAmount;
        $this->BillingZipCode = $BillingZipCode;
        $this->BillingStreetAddress = $BillingStreetAddress;
        $this->Folio = $Folio;
        $this->SendEmail = $SendEmail;
        $this->AccountType = $AccountType;
        $this->Username = $Username;
        $this->Password = $Password;
        $this->pan = $pan;
        $this->exp = $exp;
        $this->cardHolderName = $cardHolderName;
        $this->uid = $uid;
        $this->tokenExpirationDate = $tokenExpirationDate->format(\DateTime::ATOM);
        $this->CVV2 = $CVV2;
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
     * @return \Gueststream\PMS\IQWare\IQVault\VAULT_WRITECC
     */
    public function setPropertyGUID($PropertyGUID)
    {
        $this->PropertyGUID = $PropertyGUID;
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
     * @return \Gueststream\PMS\IQWare\IQVault\VAULT_WRITECC
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
     * @return \Gueststream\PMS\IQWare\IQVault\VAULT_WRITECC
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
     * @return \Gueststream\PMS\IQWare\IQVault\VAULT_WRITECC
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
     * @return \Gueststream\PMS\IQWare\IQVault\VAULT_WRITECC
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
     * @return \Gueststream\PMS\IQWare\IQVault\VAULT_WRITECC
     */
    public function setBillingStreetAddress($BillingStreetAddress)
    {
        $this->BillingStreetAddress = $BillingStreetAddress;
        return $this;
    }

    /**
     * @return SubFolioEnum
     */
    public function getFolio()
    {
        return $this->Folio;
    }

    /**
     * @param SubFolioEnum $Folio
     * @return \Gueststream\PMS\IQWare\IQVault\VAULT_WRITECC
     */
    public function setFolio($Folio)
    {
        $this->Folio = $Folio;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getSendEmail()
    {
        return $this->SendEmail;
    }

    /**
     * @param boolean $SendEmail
     * @return \Gueststream\PMS\IQWare\IQVault\VAULT_WRITECC
     */
    public function setSendEmail($SendEmail)
    {
        $this->SendEmail = $SendEmail;
        return $this;
    }

    /**
     * @return AccountTypeEnum
     */
    public function getAccountType()
    {
        return $this->AccountType;
    }

    /**
     * @param AccountTypeEnum $AccountType
     * @return \Gueststream\PMS\IQWare\IQVault\VAULT_WRITECC
     */
    public function setAccountType($AccountType)
    {
        $this->AccountType = $AccountType;
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
     * @return \Gueststream\PMS\IQWare\IQVault\VAULT_WRITECC
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
     * @return \Gueststream\PMS\IQWare\IQVault\VAULT_WRITECC
     */
    public function setPassword($Password)
    {
        $this->Password = $Password;
        return $this;
    }

    /**
     * @return string
     */
    public function getPan()
    {
        return $this->pan;
    }

    /**
     * @param string $pan
     * @return \Gueststream\PMS\IQWare\IQVault\VAULT_WRITECC
     */
    public function setPan($pan)
    {
        $this->pan = $pan;
        return $this;
    }

    /**
     * @return string
     */
    public function getExp()
    {
        return $this->exp;
    }

    /**
     * @param string $exp
     * @return \Gueststream\PMS\IQWare\IQVault\VAULT_WRITECC
     */
    public function setExp($exp)
    {
        $this->exp = $exp;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardHolderName()
    {
        return $this->cardHolderName;
    }

    /**
     * @param string $cardHolderName
     * @return \Gueststream\PMS\IQWare\IQVault\VAULT_WRITECC
     */
    public function setCardHolderName($cardHolderName)
    {
        $this->cardHolderName = $cardHolderName;
        return $this;
    }

    /**
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * @param string $uid
     * @return \Gueststream\PMS\IQWare\IQVault\VAULT_WRITECC
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTokenExpirationDate()
    {
        if ($this->tokenExpirationDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->tokenExpirationDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $tokenExpirationDate
     * @return \Gueststream\PMS\IQWare\IQVault\VAULT_WRITECC
     */
    public function setTokenExpirationDate(\DateTime $tokenExpirationDate)
    {
        $this->tokenExpirationDate = $tokenExpirationDate->format(\DateTime::ATOM);
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
     * @return \Gueststream\PMS\IQWare\IQVault\VAULT_WRITECC
     */
    public function setCVV2($CVV2)
    {
        $this->CVV2 = $CVV2;
        return $this;
    }
}
