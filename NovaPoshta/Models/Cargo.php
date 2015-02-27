<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 16.02.2015
 * Time: 20:48
 */

namespace NovaPoshta\Models;

/**
 * Class Cargo
 * @package NovaPoshta\Models
 * @property string CargoDescriptio
 * @property string Amount
 */
class Cargo
{
    public function setCargoDescriptio($value)
    {
        $this->CargoDescriptio = $value;
        return $this;
    }

    public function getCargoDescriptio()
    {
        return $this->CargoDescriptio;
    }

    public function setAmount($value)
    {
        $this->Amount = $value;
        return $this;
    }

    public function getAmount()
    {
        return $this->Amount;
    }
}