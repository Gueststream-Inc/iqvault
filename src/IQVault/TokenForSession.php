<?php

namespace Gueststream\PMS\IQWare\IQVault;

class TokenForSession
{

    /**
     * @var string $ReferenceNumber
     */
    protected $ReferenceNumber = null;

    /**
     * @var string $ApprovalCode
     */
    protected $ApprovalCode = null;

    /**
     * @var string $Token
     */
    protected $Token = null;

    /**
     * @var string $Session
     */
    protected $Session = null;

    /**
     * @var string $Message
     */
    protected $Message = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getReferenceNumber()
    {
        return $this->ReferenceNumber;
    }

    /**
     * @param string $ReferenceNumber
     * @return \Gueststream\PMS\IQWare\IQVault\TokenForSession
     */
    public function setReferenceNumber($ReferenceNumber)
    {
        $this->ReferenceNumber = $ReferenceNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getApprovalCode()
    {
        return $this->ApprovalCode;
    }

    /**
     * @param string $ApprovalCode
     * @return \Gueststream\PMS\IQWare\IQVault\TokenForSession
     */
    public function setApprovalCode($ApprovalCode)
    {
        $this->ApprovalCode = $ApprovalCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->Token;
    }

    /**
     * @param string $Token
     * @return \Gueststream\PMS\IQWare\IQVault\TokenForSession
     */
    public function setToken($Token)
    {
        $this->Token = $Token;
        return $this;
    }

    /**
     * @return string
     */
    public function getSession()
    {
        return $this->Session;
    }

    /**
     * @param string $Session
     * @return \Gueststream\PMS\IQWare\IQVault\TokenForSession
     */
    public function setSession($Session)
    {
        $this->Session = $Session;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * @param string $Message
     * @return \Gueststream\PMS\IQWare\IQVault\TokenForSession
     */
    public function setMessage($Message)
    {
        $this->Message = $Message;
        return $this;
    }
}
