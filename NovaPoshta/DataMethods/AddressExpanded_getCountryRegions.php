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
 * @property string Parent
 * @property string Page
 */
class AddressExpanded_getCountryRegions extends \stdClass
{
    public function setParent($value)
    {
        $this->Parent = $value;
        return $this;
    }

    public function getParent()
    {
        return $this->Parent;
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