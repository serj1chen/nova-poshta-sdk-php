<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19.02.2015
 * Time: 0:22
 */

namespace NovaPoshta\DataMethods;

/**
 * Class Address_getStreet
 * @package NovaPoshta\DataMethods
 * @property string CounterpartyProperty
 * @property string Page
 * @property string FindByString
 * @property string CityRef
 */
class Counterparty_getCounterparties extends \stdClass
{
    public function setCounterpartyProperty($value)
    {
        $this->CounterpartyProperty = $value;
        return $this;
    }

    public function getCounterpartyProperty()
    {
        return $this->CounterpartyProperty;
    }

    public function setPage($value)
    {
        $this->Page = $value;
        return $this;
    }

    public function getPage()
    {
        return $this->Page;
    }

    public function setFindByString($value)
    {
        $this->FindByString = $value;
        return $this;
    }

    public function getFindByString()
    {
        return $this->FindByString;
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
}