<?php

namespace NovaPoshta\ApiModels;

use NovaPoshta\Core\ApiModel;
use stdClass;

/**
 * @author user
 * @version 1.0
 * @created 14-���-2015 10:19:25
 */
class AddressExpanded extends ApiModel
{
	static public function getCountryRegions(stdClass $data = null)
	{
		return self::sendData(__FUNCTION__, $data);
	}

	static public function getSettlements(stdClass $data = null)
	{
		return self::sendData(__FUNCTION__, $data);
	}

	static public function getSettlementStreets(stdClass $data = null)
	{
		return self::sendData(__FUNCTION__, $data);
	}
}