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
 * @property string RecipientCityRef
 * @property string DateTime
 */
class Common_getTimeIntervals extends BaseDataMethod
{
    public function setRecipientCityRef($value)
    {
        $this->RecipientCityRef = $value;
        return $this;
    }

    public function getRecipientCityRef()
    {
        return $this->RecipientCityRef;
    }

    public function setDateTime($value)
    {
        $this->DateTime = $value;
        return $this;
    }

    public function getDateTime()
    {
        return $this->DateTime;
    }
}