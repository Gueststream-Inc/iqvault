<?php

namespace Gueststream\PMS\IQWare\IQVault;

class TestVaultUser
{

    /**
     * @var string $Username
     */
    protected $Username = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @var string $uid
     */
    protected $uid = null;

    /**
     * @param string $Username
     * @param string $Password
     * @param string $uid
     */
    public function __construct($Username, $Password, $uid)
    {
        $this->Username = $Username;
        $this->Password = $Password;
        $this->uid = $uid;
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
     * @return \Gueststream\PMS\IQWare\IQVault\TestVaultUser
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
     * @return \Gueststream\PMS\IQWare\IQVault\TestVaultUser
     */
    public function setPassword($Password)
    {
        $this->Password = $Password;
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
     * @return \Gueststream\PMS\IQWare\IQVault\TestVaultUser
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
        return $this;
    }
}
