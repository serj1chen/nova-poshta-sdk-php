<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19.02.2015
 * Time: 0:22
 */

namespace NovaPoshta\DataMethods;

/**
 * Class InternetDocument_getDocumentDeliveryDate
 * @package NovaPoshta\DataMethods
 * @property string DateTime
 * @property string CitySender
 * @property string CityRecipient
 * @property string ServiceType
 */
class InternetDocument_getDocumentDeliveryDate extends BaseDataMethod
{
    public function setDateTime($value)
    {
        $this->DateTime = $value;
        return $this;
    }

    public function getDateTime()
    {
        return $this->DateTime;
    }

    public function setCitySender($value)
    {
        $this->CitySender = $value;
        return $this;
    }

    public function getCitySender()
    {
        return $this->CitySender;
    }

    public function setCityRecipient($value)
    {
        $this->CityRecipient = $value;
        return $this;
    }

    public function getCityRecipient()
    {
        return $this->CityRecipient;
    }

    public function setServiceType($value)
    {
        $this->ServiceType = $value;
        return $this;
    }

    public function getServiceType()
    {
        return $this->ServiceType;
    }
}