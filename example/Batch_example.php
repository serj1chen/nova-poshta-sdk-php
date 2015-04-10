<?php

namespace NovaPoshta_example;


use NovaPoshta\ApiModels\Address;
use NovaPoshta\ApiModels\Common;
use NovaPoshta\MethodParameters\Common_getTimeIntervals;

class Batch_example
{
    public static function butch()
    {
        $dataArray = array(
            'getBackwardDeliveryCargoTypes' => null,
            'getCargoDescriptionList' => null,
            'getCargoTypes' => null,
            'getDocumentStatuses' => null,
            'getOwnershipFormsList' => null,
            'getPalletsList' => null,
            'getPaymentForms' => null,
            'getServiceTypes' => null,
            'getTimeIntervals' => null,
            'getTiresWheelsList' => null,
            'getTraysList' => null,
            'getTypesOfCounterparties' => null,
            'getTypesOfPayers' => null,
            'getTypesOfPayersForRedelivery' => null,
        );


        Common::isBatch();

//        $dataArray['getBackwardDeliveryCargoTypes'] = Common::getBackwardDeliveryCargoTypes();
//        $dataArray['getCargoDescriptionList'] = Common::getCargoDescriptionList();
//        $dataArray['getCargoTypes'] = Common::getCargoTypes();
//        $dataArray['getDocumentStatuses'] = Common::getDocumentStatuses();
//        $dataArray['getOwnershipFormsList'] = Common::getOwnershipFormsList();
        $dataArray['getPalletsList'] = Common::getPalletsList();
        $dataArray['getPaymentForms'] = Common::getPaymentForms();
        $dataArray['getServiceTypes'] = Common::getServiceTypes();
//
//        $data = new Common_getTimeIntervals();
//        $data->RecipientCityRef = '8d5a980d-391c-11dd-90d9-001a92567626';
//        $data->DateTime = '15.03.2015';
//        $dataArray['getBackwardDeliveryCargoTypes'] = Common::getTimeIntervals($data);
//
//        $dataArray['getTiresWheelsList'] = Common::getTiresWheelsList();
//        $dataArray['getTraysList'] = Common::getTraysList();
//        $dataArray['getTypesOfCounterparties'] = Common::getTypesOfCounterparties();
//        $dataArray['getTypesOfPayers'] = Common::getTypesOfPayers();
//        $dataArray['getTypesOfPayersForRedelivery'] = Common::getTypesOfPayersForRedelivery();

        return Common::getResponseBatch();
    }
}