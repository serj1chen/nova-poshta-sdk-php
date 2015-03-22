<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 16.02.2015
 * Time: 20:48
 */

namespace NovaPoshta\Models;

use NovaPoshta\Core\BaseModel;

/**
 * Class Cargo
 * @package NovaPoshta\Models
 * @property string CargoDescription
 * @property string Amount
 */
class Cargo extends BaseModel
{
    public function setCargoDescription($value)
    {
        $this->CargoDescription = $value;
        return $this;
    }

    public function getCargoDescription()
    {
        return $this->CargoDescription;
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