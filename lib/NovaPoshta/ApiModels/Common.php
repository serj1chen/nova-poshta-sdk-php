<?php

namespace NovaPoshta\ApiModels;

use NovaPoshta\Core\ApiModel;
use stdClass;

/**
 * @author user
 * @version 1.0
 * @created 10-���-2015 23:46:34
 */
class Common extends ApiModel
{
    static public function getBackwardDeliveryCargoTypes()
    {
        return self::sendData(__FUNCTION__);
    }

    static public function getCargoDescriptionList(stdClass $data = null)
    {
        return self::sendData(__FUNCTION__, $data);
    }

    static public function getCargoTypes()
    {
        return self::sendData(__FUNCTION__);
    }

    static public function getDocumentStatuses()
    {
        return self::sendData(__FUNCTION__);
    }

    static public function getOwnershipFormsList()
    {
        return self::sendData(__FUNCTION__);
    }

    static public function getPalletsList()
    {
        return self::sendData(__FUNCTION__);
    }

    static public function getPaymentForms()
    {
        return self::sendData(__FUNCTION__);
    }

    static public function getServiceTypes()
    {
        return self::sendData(__FUNCTION__);
    }

    static public function getTimeIntervals(stdClass $data = null)
    {
        return self::sendData(__FUNCTION__, $data);
    }

    static public function getTiresWheelsList()
    {
        return self::sendData(__FUNCTION__);
    }

    static public function getTraysList()
    {
        return self::sendData(__FUNCTION__);
    }

    static public function getTypesOfCounterparties()
    {
        return self::sendData(__FUNCTION__);
    }

    static public function getTypesOfPayers()
    {
        return self::sendData(__FUNCTION__);
    }

    static public function getTypesOfPayersForRedelivery()
    {
        return self::sendData(__FUNCTION__);
    }
}