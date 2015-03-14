<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12.02.2015
 * Time: 22:00
 */

namespace NovaPoshta_example;

use NovaPoshta\ApiModels\Common;
use NovaPoshta\DataMethods\Common_getCargoDescriptionList;
use NovaPoshta\DataMethods\Common_getTimeIntervals;

class Common_example
{
    static public function getBackwardDeliveryCargoTypes()
    {
        return Common::getBackwardDeliveryCargoTypes();
    }

    static public function getCargoDescriptionList()
    {
        $data = new Common_getCargoDescriptionList();
        $data->setPage(1);
        $data->setFindByString('Шин');

        return Common::getCargoDescriptionList($data);
    }

    static public function getCargoTypes()
    {
        return Common::getCargoTypes();
    }

    static public function getDocumentStatuses()
    {
        return Common::getDocumentStatuses();
    }

    static public function getOwnershipFormsList()
    {
        return Common::getOwnershipFormsList();
    }

    static public function getPalletsList()
    {
        return Common::getPalletsList();
    }

    static public function getPaymentForms()
    {
        return Common::getPaymentForms();
    }

    static public function getServiceTypes()
    {
        return Common::getServiceTypes();
    }

    static public function getTimeIntervals()
    {
        $data = new Common_getTimeIntervals();
        $data->RecipientCityRef = '8d5a980d-391c-11dd-90d9-001a92567626';
        $data->DateTime = '15.03.2015';

        return Common::getTimeIntervals($data);
    }

    static public function getTiresWheelsList()
    {
        return Common::getTiresWheelsList();
    }

    static public function getTraysList()
    {
        return Common::getTraysList();
    }

    static public function getTypesOfCounterparties()
    {
        return Common::getTypesOfCounterparties();
    }

    static public function getTypesOfPayers()
    {
        return Common::getTypesOfPayers();
    }

    static public function getTypesOfPayersForRedelivery()
    {
        return Common::getTypesOfPayersForRedelivery();
    }
}