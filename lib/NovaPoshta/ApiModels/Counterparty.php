<?php

namespace NovaPoshta\ApiModels;

use NovaPoshta\Core\ApiModel;
use \stdClass;

/**
 * Counterparty - Модель для работы с данными контрагента
 *
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
 * Class Counterparty
 * @package NovaPoshta\ApiModels
 */
class Counterparty extends ApiModel
{
    /**
     * save() - сохранить контрагента
     *
     * @return \NovaPoshta\Models\DataContainerResponse
     */
    public function save()
    {
        return $this->sendData(__FUNCTION__, $this->getThisData());
    }

    /**
     * update() - обновить данные контрагента
     *
     * @return \NovaPoshta\Models\DataContainerResponse
     */
    public function update()
    {
        return $this->sendData(__FUNCTION__, $this->getThisData());
    }

    /**
     * saveThirdPerson() - сохранить контрагента с типом "третье лицо"
     * Функция доступна для клиентов, заключивших договор с компанией "Новая Почта"
     *
     */
    public function saveThirdPerson()
    {
    }

    /**
     * updateThirdPerson() - обновить данные контрагента с типом "третье лицо"
     * Функция доступна для клиентов, заключивших договор с компанией "Новая Почта"
     *
     */
    public function updateThirdPerson()
    {


    }

    /**
     * delete() - удалить контрагента отправителя/получателя
     *
     * @return \NovaPoshta\Models\DataContainerResponse
     */
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

    /**
     * cloneLoyaltyCounterpartySender() - создать контрагента-отправителя в выбранном
     * городе (для участников программы лояльности)
     *
     * Метод: cloneLoyaltyCounterpartySender — создает контрагента-отправителя, если выбранный город-отправитель
     * отличается от города в котором зарегистрирован пользователь
     *
     * @param stdClass $data
     * @return \NovaPoshta\Models\DataContainerResponse
     */
    public static function cloneLoyaltyCounterpartySender(stdClass $data = null)
    {
        return self::sendData(__FUNCTION__, $data);
    }

    /**
     * getCounterparties() - загрузить список контрагентов отправителей/получателей
     *
     * @param stdClass $data
     * @return \NovaPoshta\Models\DataContainerResponse
     */
    public static function getCounterparties(stdClass $data = null)
    {
        return self::sendData(__FUNCTION__, $data);
    }

    /**
     * getCounterpartyAddresses() - загрузить список адресов контрагентов
     *
     * @param stdClass $data
     * @return \NovaPoshta\Models\DataContainerResponse
     */
    public static function getCounterpartyAddresses(stdClass $data = null)
    {
        return self::sendData(__FUNCTION__, $data);
    }

    /**
     * getCounterpartyContactPersons() - загрузить список контактных лиц контрагента
     *
     * @param stdClass $data
     * @return \NovaPoshta\Models\DataContainerResponse
     */
    public static function getCounterpartyContactPersons(stdClass $data = null)
    {
        return self::sendData(__FUNCTION__, $data);
    }

    /**
     * getCounterpartyByEDRPOU() - найти контрагента по коду ОКПО
     *
     * @param stdClass $data
     * @return \NovaPoshta\Models\DataContainerResponse
     */
    public static function getCounterpartyByEDRPOU(stdClass $data = null)
    {
        return self::sendData(__FUNCTION__, $data);
    }

    /**
     * getCounterpartyOptions() - загрузить параметры контрагента
     *
     * @param stdClass $data
     * @return \NovaPoshta\Models\DataContainerResponse
     */
    public static function getCounterpartyOptions(stdClass $data = null)
    {
        return self::sendData(__FUNCTION__, $data);
    }
}