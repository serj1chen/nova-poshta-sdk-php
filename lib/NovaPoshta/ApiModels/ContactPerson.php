<?php

namespace NovaPoshta\ApiModels;

use NovaPoshta\Core\ApiModel;

/**
 * @author user
 * @version 1.0
 * @created 17-���-2015 23:07:07
 * @property string Ref
 * @property string CounterpartyRef
 * @property string FirstName
 * @property string LastName
 * @property string MiddleName
 * @property string Email
 */
class ContactPerson extends ApiModel
{
    function save()
    {
        return $this->sendData(__FUNCTION__, $this->getThisData());
    }

    function update()
    {
        return $this->sendData(__FUNCTION__, $this->getThisData());
    }

    function delete()
    {
        return $this->sendData(__FUNCTION__, $this->getThisData());
    }

    /**
     *
     * @param value
     */
    function setRef($value)
    {
        $this->Ref = $value;
        return $this;
    }

    function getRef()
    {
        return $this->Ref;
    }

    /**
     * @param $value
     * @return $this
     */
    function setCounterpartyRef($value)
    {
        $this->CounterpartyRef = $value;
        return $this;
    }

    function getCounterpartyRef()
    {
        return $this->CounterpartyRef;
    }

    /**
     *
     * @param value
     */
    function setFirstName($value)
    {
        $this->FirstName = $value;
        return $this;
    }

    function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     *
     * @param value
     */
    function setLastName($value)
    {
        $this->LastName = $value;
        return $this;
    }

    function getLastName()
    {
        return $this->LastName;
    }

    /**
     *
     * @param value
     */
    function setMiddleName($value)
    {
        $this->MiddleName = $value;
        return $this;
    }

    function getMiddleName()
    {
        return $this->MiddleName;
    }

    /**
     * @param $value
     * @return $this
     */
    function setPhone($value)
    {
        $this->Phone = $value;
        return $this;
    }

    function getPhone()
    {
        return $this->Ref;
    }

    /**
     *
     * @param value
     */
    function setEmail($value)
    {
        $this->Email = $value;
        return $this;
    }

    function getEmail()
    {
        return $this->Email;
    }

}