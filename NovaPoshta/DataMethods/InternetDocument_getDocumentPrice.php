<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19.02.2015
 * Time: 0:22
 */

namespace NovaPoshta\DataMethods;

/**
 * Class InternetDocument_documentsTracking
 * @package NovaPoshta\DataMethods
 * @property string CitySender
 * @property string CityRecipient
 * @property string ServiceType
 * @property string Weight
 * @property string Cost
 * @property string DateTime
 */
class InternetDocument_getDocumentPrice extends \stdClass
{
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

    public function setWeight($value)
    {
        $this->Weight = $value;
        return $this;
    }

    public function getWeight()
    {
        return $this->Weight;
    }

    public function setCost($value)
    {
        $this->Cost = $value;
        return $this;
    }

    public function getCost()
    {
        return $this->Cost;
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