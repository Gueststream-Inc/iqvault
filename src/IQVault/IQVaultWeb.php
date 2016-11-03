<?php

namespace Gueststream\PMS\IQWare\IQVault;

class IQVaultWeb extends \SoapClient
{

	/**
	 * @var array $classmap The defined classes
	 */
	private static $classmap = [
		'VAULT_WRITECC'                  => 'Gueststream\\PMS\\IQWare\\IQVault\\VAULT_WRITECC',
		'VAULT_WRITECCResponse'          => 'Gueststream\\PMS\\IQWare\\IQVault\\VAULT_WRITECCResponse',
		'ProtobasePostResult'            => 'Gueststream\\PMS\\IQWare\\IQVault\\ProtobasePostResult',
		'PROCESS_CARD'                   => 'Gueststream\\PMS\\IQWare\\IQVault\\PROCESS_CARD',
		'PROCESS_CARDResponse'           => 'Gueststream\\PMS\\IQWare\\IQVault\\PROCESS_CARDResponse',
		'IsCCFeeActive'                  => 'Gueststream\\PMS\\IQWare\\IQVault\\IsCCFeeActive',
		'IsCCFeeActiveResponse'          => 'Gueststream\\PMS\\IQWare\\IQVault\\IsCCFeeActiveResponse',
		'CreditCardFee'                  => 'Gueststream\\PMS\\IQWare\\IQVault\\CreditCardFee',
		'VAULT_WRITECCINTERFACE'         => 'Gueststream\\PMS\\IQWare\\IQVault\\VAULT_WRITECCINTERFACE',
		'VAULT_WRITECCINTERFACEResponse' => 'Gueststream\\PMS\\IQWare\\IQVault\\VAULT_WRITECCINTERFACEResponse',
		'InterfaceVaultResponse'         => 'Gueststream\\PMS\\IQWare\\IQVault\\InterfaceVaultResponse',
		'GetCreditCardType'              => 'Gueststream\\PMS\\IQWare\\IQVault\\GetCreditCardType',
		'GetCreditCardTypeResponse'      => 'Gueststream\\PMS\\IQWare\\IQVault\\GetCreditCardTypeResponse',
		'GetTokenForSession'             => 'Gueststream\\PMS\\IQWare\\IQVault\\GetTokenForSession',
		'GetTokenForSessionResponse'     => 'Gueststream\\PMS\\IQWare\\IQVault\\GetTokenForSessionResponse',
		'TokenForSession'                => 'Gueststream\\PMS\\IQWare\\IQVault\\TokenForSession',
		'TestVaultUser'                  => 'Gueststream\\PMS\\IQWare\\IQVault\\TestVaultUser',
		'TestVaultUserResponse'          => 'Gueststream\\PMS\\IQWare\\IQVault\\TestVaultUserResponse',
		'VAULT_WRITECC_EXTERNAL'         => 'Gueststream\\PMS\\IQWare\\IQVault\\VAULT_WRITECC_EXTERNAL',
		'VAULT_WRITECC_EXTERNALResponse' => 'Gueststream\\PMS\\IQWare\\IQVault\\VAULT_WRITECC_EXTERNALResponse',
		'VaultResponse'                  => 'Gueststream\\PMS\\IQWare\\IQVault\\VaultResponse',
	];

	/**
	 * @param array $options A array of config values
	 * @param string $wsdl The wsdl file to use
	 */
	public function __construct($wsdl, array $options = [])
	{
		foreach (self::$classmap as $key => $value) {
			if ( ! isset($options['classmap'][$key])) {
				$options['classmap'][$key] = $value;
			}
		}
		$options = array_merge([
			'features' => 1,
		], $options);

		parent::__construct($wsdl, $options);
	}

	/**
	 * Write a card into IQVault system. Users are allowed to write only in web. You can even use this method to insert a card into IQVault areas of content.
	 *
	 * @param VAULT_WRITECC $parameters
	 *
	 * @return VAULT_WRITECCResponse
	 */
	public function WriteCCWithProtobase(VAULT_WRITECC $parameters)
	{
		return $this->__soapCall('WriteCCWithProtobase', [$parameters]);
	}

	/**
	 * Write a card into IQVault system. Users are allowed to write only in web. You can even use this method to insert a card into IQVault areas of content.
	 *
	 * @param PROCESS_CARD $parameters
	 *
	 * @return PROCESS_CARDResponse
	 */
	public function ProcessCard(PROCESS_CARD $parameters)
	{
		return $this->__soapCall('ProcessCard', [$parameters]);
	}

	/**
	 * @param IsCCFeeActive $parameters
	 *
	 * @return IsCCFeeActiveResponse
	 */
	public function IsCCFeeActive(IsCCFeeActive $parameters)
	{
		return $this->__soapCall('IsCCFeeActive', [$parameters]);
	}

	/**
	 * Write a card into IQVault system. Users are allowed to write only in web. You can even use this method to insert a card into IQVault areas of content.
	 *
	 * @param VAULT_WRITECCINTERFACE $parameters
	 *
	 * @return VAULT_WRITECCINTERFACEResponse
	 */
	public function WriteCCInterface(VAULT_WRITECCINTERFACE $parameters)
	{
		return $this->__soapCall('WriteCCInterface', [$parameters]);
	}

	/**
	 * Return the ID_CreditCard for a card number
	 *
	 * @param GetCreditCardType $parameters
	 *
	 * @return GetCreditCardTypeResponse
	 */
	public function GetCreditCardType(GetCreditCardType $parameters)
	{
		return $this->__soapCall('GetCreditCardType', [$parameters]);
	}

	/**
	 * Get out of process token,approval, referenceNo and session
	 *
	 * @param GetTokenForSession $parameters
	 *
	 * @return GetTokenForSessionResponse
	 */
	public function GetTokenForSession(GetTokenForSession $parameters)
	{
		return $this->__soapCall('GetTokenForSession', [$parameters]);
	}

	/**
	 * Test vault user
	 *
	 * @param TestVaultUser $parameters
	 *
	 * @return TestVaultUserResponse
	 */
	public function TestVaultUser(TestVaultUser $parameters)
	{
		return $this->__soapCall('TestVaultUser', [$parameters]);
	}

	/**
	 * Write a card into IQVault system. Users are allowed to write only in web. You can even use this method to insert a card into IQVault areas of content.
	 *
	 * @param VAULT_WRITECC_EXTERNAL $parameters
	 *
	 * @return VAULT_WRITECC_EXTERNALResponse
	 */
	public function WriteCC(VAULT_WRITECC_EXTERNAL $parameters)
	{
		return $this->__soapCall('WriteCC', [$parameters]);
	}
}
