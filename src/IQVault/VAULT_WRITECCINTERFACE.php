<?php

namespace Gueststream\PMS\IQWare\IQVault;

class VAULT_WRITECCINTERFACE
{

    /**
     * @var string $vaultURL
     */
    protected $vaultURL = null;

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
     * @param string $vaultURL
     * @param string $Username
     * @param string $Password
     * @param string $pan
     * @param string $exp
     * @param string $cardHolderName
     * @param string $uid
     * @param \DateTime $tokenExpirationDate
     */
    public function __construct($vaultURL, $Username, $Password, $pan, $exp, $cardHolderName, $uid, \DateTime $tokenExpirationDate)
    {
        $this->vaultURL = $vaultURL;
        $this->Username = $Username;
        $this->Password = $Password;
        $this->pan = $pan;
        $this->exp = $exp;
        $this->cardHolderName = $cardHolderName;
        $this->uid = $uid;
        $this->tokenExpirationDate = $tokenExpirationDate->format(\DateTime::ATOM);
    }

    /**
     * @return string
     */
    public function getVaultURL()
    {
        return $this->vaultURL;
    }

    /**
     * @param string $vaultURL
     * @return \Gueststream\PMS\IQWare\IQVault\VAULT_WRITECCINTERFACE
     */
    public function setVaultURL($vaultURL)
    {
        $this->vaultURL = $vaultURL;
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
     * @return \Gueststream\PMS\IQWare\IQVault\VAULT_WRITECCINTERFACE
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
     * @return \Gueststream\PMS\IQWare\IQVault\VAULT_WRITECCINTERFACE
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
     * @return \Gueststream\PMS\IQWare\IQVault\VAULT_WRITECCINTERFACE
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
     * @return \Gueststream\PMS\IQWare\IQVault\VAULT_WRITECCINTERFACE
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
     * @return \Gueststream\PMS\IQWare\IQVault\VAULT_WRITECCINTERFACE
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
     * @return \Gueststream\PMS\IQWare\IQVault\VAULT_WRITECCINTERFACE
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
     * @return \Gueststream\PMS\IQWare\IQVault\VAULT_WRITECCINTERFACE
     */
    public function setTokenExpirationDate(\DateTime $tokenExpirationDate)
    {
        $this->tokenExpirationDate = $tokenExpirationDate->format(\DateTime::ATOM);
        return $this;
    }
}
