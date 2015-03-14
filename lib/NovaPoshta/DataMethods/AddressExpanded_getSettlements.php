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
 * @property string Page
 */
class AddressExpanded_getSettlements extends BaseDataMethod
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

    public function setPage($value)
    {
        $this->Page = $value;
        return $this;
    }

    public function getPage()
    {
        return $this->Page;
    }
}