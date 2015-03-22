<?php

namespace NovaPoshta\ApiModels;

use NovaPoshta\Core\ApiModel;
use stdClass;

/**
 * Common - Модель для работы со справочниками
 *
 * @author user
 * @version 1.0
 * @created 10-���-2015 23:46:34
 *
 * Class Common
 * @package NovaPoshta\ApiModels
 */
class Common extends ApiModel
{
    /**
     * getBackwardDeliveryCargoTypes() - получить список видов обратной доставки груза
     *
     * @return \NovaPoshta\Models\DataContainerResponse
     */
    public static function getBackwardDeliveryCargoTypes()
    {
        return self::sendData(__FUNCTION__);
    }

    /**
     * getCargoDescriptionList() - загрузить справочник описания груза
     *
     * @param stdClass $data
     * @return \NovaPoshta\Models\DataContainerResponse
     */
    public static function getCargoDescriptionList(stdClass $data = null)
    {
        return self::sendData(__FUNCTION__, $data);
    }

    /**
     * getCargoTypes() - загрузить список видов груза
     *
     * @return \NovaPoshta\Models\DataContainerResponse
     */
    public static function getCargoTypes()
    {
        return self::sendData(__FUNCTION__);
    }

    /**
     * getDocumentStatuses() - загрузить список статусов документов
     *
     * @return \NovaPoshta\Models\DataContainerResponse
     */
    public static function getDocumentStatuses()
    {
        return self::sendData(__FUNCTION__);
    }

    /**
     * getOwnershipFormsList() - загрузить список форм собственности
     *
     * @return \NovaPoshta\Models\DataContainerResponse
     */
    public static function getOwnershipFormsList()
    {
        return self::sendData(__FUNCTION__);
    }

    /**
     * getPalletsList() - загрузить список поддонов (при заказе услуги обратная доставка  поддонов)
     *
     * @return \NovaPoshta\Models\DataContainerResponse
     */
    public static function getPalletsList()
    {
        return self::sendData(__FUNCTION__);
    }

    /**
     * getPaymentForms() - загрузить список форм оплаты
     *
     * @return \NovaPoshta\Models\DataContainerResponse
     */
    public static function getPaymentForms()
    {
        return self::sendData(__FUNCTION__);
    }

    /**
     * getServiceTypes() - загрузить справочник технологий доставки
     *
     * @return \NovaPoshta\Models\DataContainerResponse
     */
    public static function getServiceTypes()
    {
        return self::sendData(__FUNCTION__);
    }

    /**
     * getTimeIntervals() - загрузить список временных интервалов (для заказа услуги "Временные интервалы")
     *
     * @param stdClass $data
     * @return \NovaPoshta\Models\DataContainerResponse
     */
    public static function getTimeIntervals(stdClass $data = null)
    {
        return self::sendData(__FUNCTION__, $data);
    }

    /**
     * getTiresWheelsList() - загрузить список шин и дисков (если вид груза "шины-диски")
     *
     * @return \NovaPoshta\Models\DataContainerResponse
     */
    public static function getTiresWheelsList()
    {
        return self::sendData(__FUNCTION__);
    }

    /**
     * getTraysList() - загрузить список поддонов (если заказана услуга обратной доставки поддонов)
     *
     * @return \NovaPoshta\Models\DataContainerResponse
     */
    public static function getTraysList()
    {
        return self::sendData(__FUNCTION__);
    }

    /**
     * getTypesOfCounterparties() - загрузить список типов контрагентов отправителей
     *
     * @return \NovaPoshta\Models\DataContainerResponse
     */
    public static function getTypesOfCounterparties()
    {
        return self::sendData(__FUNCTION__);
    }

    /**
     * getTypesOfPayers() - загрузить список видов плательщиков
     *
     * @return \NovaPoshta\Models\DataContainerResponse
     */
    public static function getTypesOfPayers()
    {
        return self::sendData(__FUNCTION__);
    }

    /**
     * getTypesOfPayersForRedelivery() - загрузить список видов плательщиков обратной доставки
     *
     * @return \NovaPoshta\Models\DataContainerResponse
     */
    public static function getTypesOfPayersForRedelivery()
    {
        return self::sendData(__FUNCTION__);
    }
}