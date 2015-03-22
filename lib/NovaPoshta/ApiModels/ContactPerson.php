<?php

namespace NovaPoshta\ApiModels;

use NovaPoshta\Core\ApiModel;

/**
 * ContactPerson - Модель для создания контактного лица
 *
 * @author user
 * @version 1.0
 * @created 17-���-2015 23:07:07
 * @property string Ref
 * @property string CounterpartyRef
 * @property string FirstName
 * @property string LastName
 * @property string MiddleName
 * @property string Email
 *
 * Class ContactPerson
 * @package NovaPoshta\ApiModels
 */
class ContactPerson extends ApiModel
{
    /**
     * save() - сохранить данные контактного лица отправителя/получателя
     *
     * @return \NovaPoshta\Models\DataContainerResponse
     */
    function save()
    {
        return $this->sendData(__FUNCTION__, $this->getThisData());
    }

    /**
     * update() - обновить данные контактного лица
     *
     * @return \NovaPoshta\Models\DataContainerResponse
     */
    function update()
    {
        return $this->sendData(__FUNCTION__, $this->getThisData());
    }

    /**
     * delete() - удалить контактное лицо отправителя/получателя
     *
     * @return \NovaPoshta\Models\DataContainerResponse
     */
    function delete()
    {
        return $this->sendData(__FUNCTION__, $this->getThisData());
    }

    function setRef($value)
    {
        $this->Ref = $value;
        return $this;
    }

    function getRef()
    {
        return $this->Ref;
    }

    function setCounterpartyRef($value)
    {
        $this->CounterpartyRef = $value;
        return $this;
    }

    function getCounterpartyRef()
    {
        return $this->CounterpartyRef;
    }

    function setFirstName($value)
    {
        $this->FirstName = $value;
        return $this;
    }

    function getFirstName()
    {
        return $this->FirstName;
    }

    function setLastName($value)
    {
        $this->LastName = $value;
        return $this;
    }

    function getLastName()
    {
        return $this->LastName;
    }

    function setMiddleName($value)
    {
        $this->MiddleName = $value;
        return $this;
    }

    function getMiddleName()
    {
        return $this->MiddleName;
    }

    function setPhone($value)
    {
        $this->Phone = $value;
        return $this;
    }

    function getPhone()
    {
        return $this->Ref;
    }

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