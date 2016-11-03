<?php

namespace Gueststream\PMS\IQWare\IQVault;

class GetTokenForSessionResponse
{

    /**
     * @var TokenForSession $GetTokenForSessionResult
     */
    protected $GetTokenForSessionResult = null;

    /**
     * @param TokenForSession $GetTokenForSessionResult
     */
    public function __construct($GetTokenForSessionResult)
    {
        $this->GetTokenForSessionResult = $GetTokenForSessionResult;
    }

    /**
     * @return TokenForSession
     */
    public function getGetTokenForSessionResult()
    {
        return $this->GetTokenForSessionResult;
    }

    /**
     * @param TokenForSession $GetTokenForSessionResult
     * @return \Gueststream\PMS\IQWare\IQVault\GetTokenForSessionResponse
     */
    public function setGetTokenForSessionResult($GetTokenForSessionResult)
    {
        $this->GetTokenForSessionResult = $GetTokenForSessionResult;
        return $this;
    }
}
