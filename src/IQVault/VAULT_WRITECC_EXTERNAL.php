<?php

namespace Gueststream\PMS\IQWare\IQVault;

class VAULT_WRITECC_EXTERNAL
{

    /**
     * @var int $PropertyGUID
     */
    protected $PropertyGUID = null;

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
     * @var string $ZipCode
     */
    protected $ZipCode = null;

    /**
     * @param int $PropertyGUID
     * @param string $Username
     * @param string $Password
     * @param string $pan
     * @param string $exp
     * @param string $cardHolderName
     * @param string $uid
     * @param \DateTime $tokenExpirationDate
     * @param int $CVV2
     * @param string $ZipCode
     */
    public function __construct($PropertyGUID, $Username, $Password, $pan, $exp, $cardHolderName, $uid, \DateTime $tokenExpirationDate, $CVV2, $ZipCode)
    {
        $this->PropertyGUID = $PropertyGUID;
        $this->Username = $Username;
        $this->Password = $Password;
        $this->pan = $pan;
        $this->exp = $exp;
        $this->cardHolderName = $cardHolderName;
        $this->uid = $uid;
        $this->tokenExpirationDate = $tokenExpirationDate->format(\DateTime::ATOM);
        $this->CVV2 = $CVV2;
        $this->ZipCode = $ZipCode;
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
     * @return \Gueststream\PMS\IQWare\IQVault\VAULT_WRITECC_EXTERNAL
     */
    public function setPropertyGUID($PropertyGUID)
    {
        $this->PropertyGUID = $PropertyGUID;
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
     * @return \Gueststream\PMS\IQWare\IQVault\VAULT_WRITECC_EXTERNAL
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
     * @return \Gueststream\PMS\IQWare\IQVault\VAULT_WRITECC_EXTERNAL
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
     * @return \Gueststream\PMS\IQWare\IQVault\VAULT_WRITECC_EXTERNAL
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
     * @return \Gueststream\PMS\IQWare\IQVault\VAULT_WRITECC_EXTERNAL
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
     * @return \Gueststream\PMS\IQWare\IQVault\VAULT_WRITECC_EXTERNAL
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
     * @return \Gueststream\PMS\IQWare\IQVault\VAULT_WRITECC_EXTERNAL
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
     * @return \Gueststream\PMS\IQWare\IQVault\VAULT_WRITECC_EXTERNAL
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
     * @return \Gueststream\PMS\IQWare\IQVault\VAULT_WRITECC_EXTERNAL
     */
    public function setCVV2($CVV2)
    {
        $this->CVV2 = $CVV2;
        return $this;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
        return $this->ZipCode;
    }

    /**
     * @param string $ZipCode
     * @return \Gueststream\PMS\IQWare\IQVault\VAULT_WRITECC_EXTERNAL
     */
    public function setZipCode($ZipCode)
    {
        $this->ZipCode = $ZipCode;
        return $this;
    }
}
