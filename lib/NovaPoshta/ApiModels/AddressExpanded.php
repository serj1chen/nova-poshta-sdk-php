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
    public static function getCountryRegions(stdClass $data = null)
    {
        return self::sendData(__FUNCTION__, $data);
    }

    public static function getSettlements(stdClass $data = null)
    {
        return self::sendData(__FUNCTION__, $data);
    }

    public static function getSettlementStreets(stdClass $data = null)
    {
        return self::sendData(__FUNCTION__, $data);
    }

    public static function getSettlementTypes()
    {
        return self::sendData(__FUNCTION__);
    }

    public static function getSettlementStreetTypes()
    {
        return self::sendData(__FUNCTION__);
    }
}