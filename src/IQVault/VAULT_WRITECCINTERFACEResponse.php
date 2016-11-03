<?php

namespace Gueststream\PMS\IQWare\IQVault;

class VAULT_WRITECCINTERFACEResponse
{

    /**
     * @var InterfaceVaultResponse $VAULT_WRITECCINTERFACEResult
     */
    protected $VAULT_WRITECCINTERFACEResult = null;

    /**
     * @param InterfaceVaultResponse $VAULT_WRITECCINTERFACEResult
     */
    public function __construct($VAULT_WRITECCINTERFACEResult)
    {
        $this->VAULT_WRITECCINTERFACEResult = $VAULT_WRITECCINTERFACEResult;
    }

    /**
     * @return InterfaceVaultResponse
     */
    public function getVAULT_WRITECCINTERFACEResult()
    {
        return $this->VAULT_WRITECCINTERFACEResult;
    }

    /**
     * @param InterfaceVaultResponse $VAULT_WRITECCINTERFACEResult
     * @return \Gueststream\PMS\IQWare\IQVault\VAULT_WRITECCINTERFACEResponse
     */
    public function setVAULT_WRITECCINTERFACEResult($VAULT_WRITECCINTERFACEResult)
    {
        $this->VAULT_WRITECCINTERFACEResult = $VAULT_WRITECCINTERFACEResult;
        return $this;
    }
}
