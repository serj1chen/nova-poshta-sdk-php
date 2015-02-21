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
}