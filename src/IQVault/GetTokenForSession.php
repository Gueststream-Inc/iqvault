<?php

namespace Gueststream\PMS\IQWare\IQVault;

class GetTokenForSession
{

    /**
     * @var int $PropertyGUID
     */
    protected $PropertyGUID = null;

    /**
     * @var string $SessionID
     */
    protected $SessionID = null;

    /**
     * @param int $PropertyGUID
     * @param string $SessionID
     */
    public function __construct($PropertyGUID, $SessionID)
    {
        $this->PropertyGUID = $PropertyGUID;
        $this->SessionID = $SessionID;
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
     * @return \Gueststream\PMS\IQWare\IQVault\GetTokenForSession
     */
    public function setPropertyGUID($PropertyGUID)
    {
        $this->PropertyGUID = $PropertyGUID;
        return $this;
    }

    /**
     * @return string
     */
    public function getSessionID()
    {
        return $this->SessionID;
    }

    /**
     * @param string $SessionID
     * @return \Gueststream\PMS\IQWare\IQVault\GetTokenForSession
     */
    public function setSessionID($SessionID)
    {
        $this->SessionID = $SessionID;
        return $this;
    }
}
