<?php

namespace Gueststream\PMS\IQWare\IQVault;

class VaultResponse
{

    /**
     * @var string $TokenGuid
     */
    protected $TokenGuid = null;

    /**
     * @var int $ResultCode
     */
    protected $ResultCode = null;

    /**
     * @var string $ResultCodeMessage
     */
    protected $ResultCodeMessage = null;

    /**
     * @var string $MaskedPan
     */
    protected $MaskedPan = null;

    /**
     * @var int $ID_CreditCard
     */
    protected $ID_CreditCard = null;

    /**
     * @param int $ResultCode
     * @param int $ID_CreditCard
     */
    public function __construct($ResultCode, $ID_CreditCard)
    {
        $this->ResultCode = $ResultCode;
        $this->ID_CreditCard = $ID_CreditCard;
    }

    /**
     * @return string
     */
    public function getTokenGuid()
    {
        return $this->TokenGuid;
    }

    /**
     * @param string $TokenGuid
     * @return \Gueststream\PMS\IQWare\IQVault\VaultResponse
     */
    public function setTokenGuid($TokenGuid)
    {
        $this->TokenGuid = $TokenGuid;
        return $this;
    }

    /**
     * @return int
     */
    public function getResultCode()
    {
        return $this->ResultCode;
    }

    /**
     * @param int $ResultCode
     * @return \Gueststream\PMS\IQWare\IQVault\VaultResponse
     */
    public function setResultCode($ResultCode)
    {
        $this->ResultCode = $ResultCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getResultCodeMessage()
    {
        return $this->ResultCodeMessage;
    }

    /**
     * @param string $ResultCodeMessage
     * @return \Gueststream\PMS\IQWare\IQVault\VaultResponse
     */
    public function setResultCodeMessage($ResultCodeMessage)
    {
        $this->ResultCodeMessage = $ResultCodeMessage;
        return $this;
    }

    /**
     * @return string
     */
    public function getMaskedPan()
    {
        return $this->MaskedPan;
    }

    /**
     * @param string $MaskedPan
     * @return \Gueststream\PMS\IQWare\IQVault\VaultResponse
     */
    public function setMaskedPan($MaskedPan)
    {
        $this->MaskedPan = $MaskedPan;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_CreditCard()
    {
        return $this->ID_CreditCard;
    }

    /**
     * @param int $ID_CreditCard
     * @return \Gueststream\PMS\IQWare\IQVault\VaultResponse
     */
    public function setID_CreditCard($ID_CreditCard)
    {
        $this->ID_CreditCard = $ID_CreditCard;
        return $this;
    }
}
