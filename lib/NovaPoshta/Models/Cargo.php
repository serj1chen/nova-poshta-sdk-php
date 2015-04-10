<?php

namespace NovaPoshta\Models;

use NovaPoshta\Core\BaseModel;

/**
 * Груз
 *
 * Class Cargo
 * @package NovaPoshta\Models
 * @property string CargoDescription
 * @property string Amount
 */
class Cargo extends BaseModel
{
    /**
     * Устанавливает реф груза
     *
     * @param $value
     * @return $this
     */
    public function setCargoDescription($value)
    {
        $this->CargoDescription = $value;
        return $this;
    }

    /**
     * Возвращает реф груза
     *
     * @return string
     */
    public function getCargoDescription()
    {
        return $this->CargoDescription;
    }

    /**
     * Устанавливает количество груза
     *
     * @param $value
     * @return $this
     */
    public function setAmount($value)
    {
        $this->Amount = $value;
        return $this;
    }

    /**
     * Возвращает количество груза
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->Amount;
    }
}