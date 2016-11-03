<?php

namespace Gueststream\PMS\IQWare\IQVault;

class VAULT_WRITECC_EXTERNALResponse
{

    /**
     * @var VaultResponse $VAULT_WRITECC_EXTERNALResult
     */
    protected $VAULT_WRITECC_EXTERNALResult = null;

    /**
     * @param VaultResponse $VAULT_WRITECC_EXTERNALResult
     */
    public function __construct($VAULT_WRITECC_EXTERNALResult)
    {
        $this->VAULT_WRITECC_EXTERNALResult = $VAULT_WRITECC_EXTERNALResult;
    }

    /**
     * @return VaultResponse
     */
    public function getVAULT_WRITECC_EXTERNALResult()
    {
        return $this->VAULT_WRITECC_EXTERNALResult;
    }

    /**
     * @param VaultResponse $VAULT_WRITECC_EXTERNALResult
     * @return \Gueststream\PMS\IQWare\IQVault\VAULT_WRITECC_EXTERNALResponse
     */
    public function setVAULT_WRITECC_EXTERNALResult($VAULT_WRITECC_EXTERNALResult)
    {
        $this->VAULT_WRITECC_EXTERNALResult = $VAULT_WRITECC_EXTERNALResult;
        return $this;
    }
}
