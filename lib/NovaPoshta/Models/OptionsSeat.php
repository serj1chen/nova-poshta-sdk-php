<?php


namespace NovaPoshta\Models;

use NovaPoshta\Core\BaseModel;

/**
 * Параметры груза
 *
 * Class OptionsSeat
 * @package NovaPoshta\Models
 * @property string volumetricVolume
 * @property string volumetricWidth
 * @property string volumetricLength
 * @property string volumetricHeight
 * @property string weight
 */
class OptionsSeat extends BaseModel
{
    /**
     * Устанавливает объем
     *
     * @param $value
     * @return $this
     */
    public function setVolumetricVolume($value)
    {
        $this->volumetricVolume = $value;
        return $this;
    }

    /**
     * Возвращает объем
     *
     * @return string
     */
    public function getVolumetricVolume()
    {
        return $this->volumetricVolume;
    }

    /**
     * Устанавливает ширину
     *
     * @param $value
     * @return $this
     */
    public function setVolumetricWidth($value)
    {
        $this->volumetricWidth = $value;
        return $this;
    }

    /**
     * Возвращает ширину
     *
     * @return string
     */
    public function getVolumetricWidth()
    {
        return $this->volumetricWidth;
    }

    /**
     * Устанавливает длину
     *
     * @param $value
     * @return $this
     */
    public function setVolumetricLength($value)
    {
        $this->volumetricLength = $value;
        return $this;
    }

    /**
     * Возвращает длину
     *
     * @return string
     */
    public function getVolumetricLength()
    {
        return $this->volumetricLength;
    }

    /**
     * Устанавливает высоту
     *
     * @param $value
     * @return $this
     */
    public function setVolumetricHeight($value)
    {
        $this->volumetricHeight = $value;
        return $this;
    }

    /**
     * Возвращает высоту
     *
     * @return string
     */
    public function getVolumetricHeight()
    {
        return $this->volumetricHeight;
    }

    /**
     * Устанавливает вес
     *
     * @param $value
     * @return $this
     */
    public function setWeight($value)
    {
        $this->weight = $value;
        return $this;
    }

    /**
     * Возвращает вес
     *
     * @return string
     */
    public function getWeight()
    {
        return $this->weight;
    }
}