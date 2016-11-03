<?php

namespace Gueststream\PMS\IQWare\IQVault;

class TestVaultUserResponse
{

    /**
     * @var boolean $TestVaultUserResult
     */
    protected $TestVaultUserResult = null;

    /**
     * @param boolean $TestVaultUserResult
     */
    public function __construct($TestVaultUserResult)
    {
        $this->TestVaultUserResult = $TestVaultUserResult;
    }

    /**
     * @return boolean
     */
    public function getTestVaultUserResult()
    {
        return $this->TestVaultUserResult;
    }

    /**
     * @param boolean $TestVaultUserResult
     * @return \Gueststream\PMS\IQWare\IQVault\TestVaultUserResponse
     */
    public function setTestVaultUserResult($TestVaultUserResult)
    {
        $this->TestVaultUserResult = $TestVaultUserResult;
        return $this;
    }
}
