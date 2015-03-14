<?php

namespace NovaPoshta\ApiModels;

use NovaPoshta\Core\ApiModel;
use stdClass;

/**
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
 */
class Address extends ApiModel
{
    public function save()
    {
        $data = $this->getThisData();

        return $this->sendData(__FUNCTION__, $data);
    }

    public function update()
    {
        $data = $this->getThisData();

        return $this->sendData(__FUNCTION__, $data);
    }

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

    static public function getCities(stdClass $data = null)
    {
        return self::sendData(__FUNCTION__, $data);
    }

    static public function getStreet(stdClass $data = null)
    {
        return self::sendData(__FUNCTION__, $data);
    }

    static public function getWarehouses(stdClass $data = null)
    {
        return self::sendData(__FUNCTION__, $data);
    }

    static public function getAreas(stdClass $data = null)
    {
        return self::sendData(__FUNCTION__, $data);
    }
}



