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
 * @property string EDRPOU
 * @property string CityRef
 */
class Counterparty_getCounterpartyByEDRPOU extends \stdClass
{
    public function setEDRPOU($value)
    {
        $this->EDRPOU = $value;
        return $this;
    }

    public function getEDRPOU()
    {
        return $this->EDRPOU;
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