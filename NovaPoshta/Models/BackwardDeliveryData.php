<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 16.02.2015
 * Time: 20:48
 */

namespace NovaPoshta\Models;

/**
 * Class BackwardDeliveryData
 * @package NovaPoshta\Models
 * @property string PayerType
 * @property string CargoType
 * @property string RedeliveryString
 * @property Cargo Tray
 */
class BackwardDeliveryData
{
    public $Trays = array();
    
    public function setPayerType($value)
    {
        $this->PayerType = $value;
        return $this;
    }

    public function getPayerType()
    {
        return $this->PayerType;
    }

    public function setCargoType($value)
    {
        $this->CargoType = $value;
        return $this;
    }

    public function getCargoType()
    {
        return $this->CargoType;
    }

    public function setRedeliveryString($value)
    {
        $this->RedeliveryString = $value;
        return $this;
    }

    public function getRedeliveryString()
    {
        return $this->RedeliveryString;
    }

    public function addTray(Cargo $cargo)
    {
        $this->Trays[] = $cargo;
        return $this;
    }
    
    public function getTrays()
    {
        return $this->Trays;
    }

    public function clearTrays()
    {
        $this->Trays = array();
        return $this;
    }
}