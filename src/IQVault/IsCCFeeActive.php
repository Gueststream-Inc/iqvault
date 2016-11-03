<?php

namespace Gueststream\PMS\IQWare\IQVault;

class IsCCFeeActive
{

    /**
     * @var int $Guid
     */
    protected $Guid = null;

    /**
     * @var CCFeePostingAccountType $PostingAccountType
     */
    protected $PostingAccountType = null;

    /**
     * @var CCFeePostingPaiementMode $PostingPaiementMode
     */
    protected $PostingPaiementMode = null;

    /**
     * @param int $Guid
     * @param CCFeePostingAccountType $PostingAccountType
     * @param CCFeePostingPaiementMode $PostingPaiementMode
     */
    public function __construct($Guid, $PostingAccountType, $PostingPaiementMode)
    {
        $this->Guid = $Guid;
        $this->PostingAccountType = $PostingAccountType;
        $this->PostingPaiementMode = $PostingPaiementMode;
    }

    /**
     * @return int
     */
    public function getGuid()
    {
        return $this->Guid;
    }

    /**
     * @param int $Guid
     * @return \Gueststream\PMS\IQWare\IQVault\IsCCFeeActive
     */
    public function setGuid($Guid)
    {
        $this->Guid = $Guid;
        return $this;
    }

    /**
     * @return CCFeePostingAccountType
     */
    public function getPostingAccountType()
    {
        return $this->PostingAccountType;
    }

    /**
     * @param CCFeePostingAccountType $PostingAccountType
     * @return \Gueststream\PMS\IQWare\IQVault\IsCCFeeActive
     */
    public function setPostingAccountType($PostingAccountType)
    {
        $this->PostingAccountType = $PostingAccountType;
        return $this;
    }

    /**
     * @return CCFeePostingPaiementMode
     */
    public function getPostingPaiementMode()
    {
        return $this->PostingPaiementMode;
    }

    /**
     * @param CCFeePostingPaiementMode $PostingPaiementMode
     * @return \Gueststream\PMS\IQWare\IQVault\IsCCFeeActive
     */
    public function setPostingPaiementMode($PostingPaiementMode)
    {
        $this->PostingPaiementMode = $PostingPaiementMode;
        return $this;
    }
}
