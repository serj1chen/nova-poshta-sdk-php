<?php

namespace NovaPoshta\ApiModels;

use NovaPoshta\Core\ApiModel;
use \stdClass;

/**
 * @author user
 * @version 1.0
 * @created 12-���-2015 21:48:03
 * @property string Ref
 * @property string CounterpartyProperty
 * @property string CityRef
 * @property string CounterpartyType
 * @property string FirstName
 * @property string LastName
 * @property string MiddleName
 * @property string Phone
 * @property string Email
 * @property string OwnershipForm
 * @property string EDRPOU
 *
 */
class Counterparty extends ApiModel
{
    public function save()
    {
        return $this->sendData(__FUNCTION__, $this->getThisData());
    }

    public function update()
    {
        return $this->sendData(__FUNCTION__, $this->getThisData());
    }

    public function saveThirdPerson()
    {
    }

    public function updateThirdPerson()
    {


    }

    public function delete()
    {
        return $this->sendData(__FUNCTION__, $this->getThisData());
    }

    public function setRef($value)
    {
        $this->Ref = $value;
        return $this;
    }

    public function getRef()
    {
        return $this->Ref;
    }

    public function setCounterpartyProperty($value)
    {
        $this->CounterpartyProperty = $value;
        return $this;
    }

    public function getCounterpartyProperty()
    {
        return $this->CounterpartyProperty;
    }

    public function setCityRef($value)
    {
        $this->CityRef = $value;
        return $this;
    }

    public function getCityRef()
    {
        return $this->CityRef;
    }

    public function setCounterpartyType($value)
    {
        $this->CounterpartyType = $value;
        return $this;
    }

    public function getCounterpartyType()
    {
        return $this->CounterpartyType;
    }

    public function setFirstName($value)
    {
        $this->FirstName = $value;
        return $this;
    }

    public function getFirstName()
    {
        return $this->FirstName;
    }

    public function setMiddleName($value)
    {
        $this->MiddleName = $value;
        return $this;
    }

    public function getMiddleName()
    {
        return $this->MiddleName;
    }

    public function setLastName($value)
    {
        $this->LastName = $value;
        return $this;
    }

    public function getLastName()
    {
        return $this->LastName;
    }

    public function setPhone($value)
    {
        $this->Phone = $value;
        return $this;
    }

    public function getPhone()
    {
        return $this->Phone;
    }

    public function setEmail($value)
    {
        $this->Email = $value;
        return $this;
    }

    public function getEmail()
    {
        return $this->Email;
    }

    public function setEDRPOU($value)
    {
        $this->EDRPOU = $value;
        return $this;
    }

    public function getEDRPOU()
    {
        return $this->EDRPOU;
    }

    public function setOwnershipForm($value)
    {
        $this->OwnershipForm = $value;
        return $this;
    }

    public function getOwnershipForm()
    {
        return $this->OwnershipForm;
    }

    static public function cloneLoyaltyCounterpartySender(stdClass $data = null)
    {
        return self::sendData(__FUNCTION__, $data);
    }

    static public function getCounterparties(stdClass $data = null)
    {
        return self::sendData(__FUNCTION__, $data);
    }

    static public function getCounterpartyAddresses(stdClass $data = null)
    {
        return self::sendData(__FUNCTION__, $data);
    }

    static public function getCounterpartyContactPersons(stdClass $data = null)
    {
        return self::sendData(__FUNCTION__, $data);
    }

    static public function getCounterpartyByEDRPOU(stdClass $data = null)
    {
        return self::sendData(__FUNCTION__, $data);
    }

    static public function getCounterpartyOptions(stdClass $data = null)
    {
        return self::sendData(__FUNCTION__, $data);
    }
}