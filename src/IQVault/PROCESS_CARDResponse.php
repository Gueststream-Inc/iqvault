<?php

namespace Gueststream\PMS\IQWare\IQVault;

class PROCESS_CARDResponse
{

    /**
     * @var ProtobasePostResult $PROCESS_CARDResult
     */
    protected $PROCESS_CARDResult = null;

    /**
     * @param ProtobasePostResult $PROCESS_CARDResult
     */
    public function __construct($PROCESS_CARDResult)
    {
        $this->PROCESS_CARDResult = $PROCESS_CARDResult;
    }

    /**
     * @return ProtobasePostResult
     */
    public function getPROCESS_CARDResult()
    {
        return $this->PROCESS_CARDResult;
    }

    /**
     * @param ProtobasePostResult $PROCESS_CARDResult
     *
     * @return \Gueststream\PMS\IQWare\IQVault\PROCESS_CARDResponse
     */
    public function setPROCESS_CARDResult($PROCESS_CARDResult)
    {
        $this->PROCESS_CARDResult = $PROCESS_CARDResult;

        return $this;
    }
}
