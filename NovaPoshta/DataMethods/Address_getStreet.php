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
 * @property string CityRef
 * @property string Page
 * @property string FindByString
 */
class Address_getStreet extends \stdClass
{
    public function setCityRef($value)
    {
        $this->CityRef = $value;
        return $this;
    }

    public function getCityRef($value)
    {
        return $this->CityRef;
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
}