<?php
/**
 * @namespace
 */
namespace Kaltura\Client\Type;

/**
 * @package api
 * @subpackage objects
 */
class SessionInfo extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaSessionInfo';
	}

	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
	
		$this->ks = (string)$xml->ks;
		$this->sessionType = (int)$xml->sessionType;
		if(count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		$this->userId = (string)$xml->userId;
		$this->expiry = (int)$xml->expiry;
		$this->privileges = (string)$xml->privileges;
	}
	/**
	 * @var string
	 * @readonly
	 */
	public $ks;

	/**
	 * @var KalturaSessionType
	 * @readonly
	 */
	public $sessionType;

	/**
	 * @var int
	 * @readonly
	 */
	public $partnerId;

	/**
	 * @var string
	 * @readonly
	 */
	public $userId;

	/**
	 * @var int expiry time in seconds (unix timestamp)
	 * @readonly
	 */
	public $expiry;

	/**
	 * @var string
	 * @readonly
	 */
	public $privileges;
}
