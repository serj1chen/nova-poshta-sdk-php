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
 * @property string Ref
 * @property string FindByString
 * @property string Page
 */
class Address_getCities extends BaseDataMethod
{
    public function setRef($value)
    {
        $this->Ref = $value;
        return $this;
    }

    public function getRef()
    {
        return $this->Ref;
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