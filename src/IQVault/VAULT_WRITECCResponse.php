<?php

namespace Gueststream\PMS\IQWare\IQVault;

class VAULT_WRITECCResponse
{

    /**
     * @var ProtobasePostResult $VAULT_WRITECCResult
     */
    protected $VAULT_WRITECCResult = null;

    /**
     * @param ProtobasePostResult $VAULT_WRITECCResult
     */
    public function __construct($VAULT_WRITECCResult)
    {
        $this->VAULT_WRITECCResult = $VAULT_WRITECCResult;
    }

    /**
     * @return ProtobasePostResult
     */
    public function getVAULT_WRITECCResult()
    {
        return $this->VAULT_WRITECCResult;
    }

    /**
     * @param ProtobasePostResult $VAULT_WRITECCResult
     * @return \Gueststream\PMS\IQWare\IQVault\VAULT_WRITECCResponse
     */
    public function setVAULT_WRITECCResult($VAULT_WRITECCResult)
    {
        $this->VAULT_WRITECCResult = $VAULT_WRITECCResult;
        return $this;
    }
}
