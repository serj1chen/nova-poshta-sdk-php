<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12.02.2015
 * Time: 22:00
 */

namespace NovaPoshta_example;

use NovaPoshta\ApiModels\AddressExpanded;
use NovaPoshta\DataMethods\AddressExpanded_getSettlements;
use NovaPoshta\DataMethods\AddressExpanded_getCountryRegions;
use NovaPoshta\DataMethods\AddressExpanded_getSettlementStreets;

class AddressExpanded_example
{
    public static function getCountryRegions()
    {
        $data = new AddressExpanded_getCountryRegions();
        $data->setParent('dcaadf02-4b33-11e4-ab6d-005056801329');
        $data->setPage(1);

        return AddressExpanded::getCountryRegions($data);
    }

    public static function getSettlements()
    {
        $data = new AddressExpanded_getSettlements();
        $data->setCountryRegion('dcaad3d6-4b33-11e4-ab6d-005056801329');
        $data->setPage(1);

        return AddressExpanded::getSettlements($data);
    }

    public static function getSettlementStreets()
    {
        $data = new AddressExpanded_getSettlementStreets();
        $data->setSettlement('04324fde-4d5f-11e4-ab6d-005056801329');
        $data->setPage(1);

        return AddressExpanded::getSettlementStreets($data);
    }

    public static function getSettlementTypes()
    {
        return AddressExpanded::getSettlementTypes();
    }

    public static function getSettlementStreetTypes()
    {
        return AddressExpanded::getSettlementStreetTypes();
    }
}