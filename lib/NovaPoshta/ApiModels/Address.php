<?php

namespace NovaPoshta\ApiModels;

use NovaPoshta\Core\ApiModel;
use stdClass;

/**
 * Модель для работы с адресами
 *
 * @author user
 * @version 1.0
 * @created 14-���-2015 10:19:25
 * @property string Ref
 * @property string CounterpartyRef
 * @property string StreetRef
 * @property string BuildingRef
 * @property string BuildingNumber
 * @property string Flat
 * @property string Note
 *
 * Class Address
 * @package NovaPoshta\ApiModels
 */
class Address extends ApiModel
{
    /**
     * save() - создать адрес отправителя/получателя
     *
     * @return \NovaPoshta\Models\DataContainerResponse
     */
    public function save()
    {
        $data = $this->getThisData();

        return $this->sendData(__FUNCTION__, $data);
    }

    /**
     * update() - редактировать адрес отправителя/получателя
     * @return \NovaPoshta\Models\DataContainerResponse
     */
    public function update()
    {
        $data = $this->getThisData();

        return $this->sendData(__FUNCTION__, $data);
    }

    /**
     * delete() - удалить ранее созданный адрес
     *
     * @return \NovaPoshta\Models\DataContainerResponse
     */
    public function delete()
    {
        $data = $this->getThisData();

        return $this->sendData(__FUNCTION__, $data);
    }

    public function setCounterpartyRef($value)
    {
        $this->CounterpartyRef = $value;
        return $this;
    }

    public function getCounterpartyRef()
    {
        return $this->CounterpartyRef;
    }

    public function setStreetRef($value)
    {
        $this->StreetRef = $value;
        return $this;
    }

    public function getStreetRef()
    {
        return $this->StreetRef;
    }

    public function setBuildingNumber($value)
    {
        $this->BuildingNumber = $value;
        return $this;
    }

    public function getBuildingNumber()
    {
        return $this->BuildingNumber;
    }

    public function setFlat($value)
    {
        $this->Flat = $value;
        return $this;
    }

    public function getFlat()
    {
        return $this->Flat;
    }

    public function setNote($value)
    {
        $this->Note = $value;
        return $this;
    }

    public function getNote()
    {
        return $this->Note;
    }

    public function setBuildingRef($value)
    {
        $this->BuildingRef = $value;
        return $this;
    }

    public function getBuildingRef()
    {
        return $this->BuildingRef;
    }

    /**
     * getCities() - загрузить справочник городов компании «Новая Почта»
     *
     * @param stdClass $data
     * @return \NovaPoshta\Models\DataContainerResponse
     */
    public static function getCities(stdClass $data = null)
    {
        return self::sendData(__FUNCTION__, $data);
    }

    /**
     * getStreet() - загрузить справочник улиц компании «Новая Почта»
     *
     * @param stdClass $data
     * @return \NovaPoshta\Models\DataContainerResponse
     */
    public static function getStreet(stdClass $data = null)
    {
        return self::sendData(__FUNCTION__, $data);
    }

    /**
     * getWarehouses() - загрузить справочник отделений компании «Новая Почта»
     *
     * @param stdClass $data
     * @return \NovaPoshta\Models\DataContainerResponse
     */
    public static function getWarehouses(stdClass $data = null)
    {
        return self::sendData(__FUNCTION__, $data);
    }

    /**
     * getAreas() - загрузить справочник географических областей Украины
     *
     * @param stdClass $data
     * @return \NovaPoshta\Models\DataContainerResponse
     */
    public static function getAreas(stdClass $data = null)
    {
        return self::sendData(__FUNCTION__, $data);
    }
}



