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
 * @property string CountryRegion
 */
class AddressExpanded_getSettlements extends \stdClass
{
    public function setCountryRegion($value)
    {
        $this->CountryRegion = $value;
        return $this;
    }

    public function getCountryRegion()
    {
        return $this->CountryRegion;
    }
}