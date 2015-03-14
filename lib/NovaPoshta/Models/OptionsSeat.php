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
    public function setVolumetricVolume($value)
    {
        $this->volumetricVolume = $value;
        return $this;
    }

    public function getVolumetricVolume()
    {
        return $this->volumetricVolume;
    }

    public function setVolumetricWidth($value)
    {
        $this->volumetricWidth = $value;
        return $this;
    }

    public function getVolumetricWidth()
    {
        return $this->volumetricWidth;
    }

    public function setVolumetricLength($value)
    {
        $this->volumetricLength = $value;
        return $this;
    }

    public function getVolumetricLength()
    {
        return $this->volumetricLength;
    }

    public function setVolumetricHeight($value)
    {
        $this->volumetricHeight = $value;
        return $this;
    }

    public function getVolumetricHeight()
    {
        return $this->volumetricHeight;
    }

    public function setWeight($value)
    {
        $this->weight = $value;
        return $this;
    }

    public function getWeight()
    {
        return $this->weight;
    }
}