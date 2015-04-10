<?php

namespace NovaPoshta\Models;

use NovaPoshta\Core\BaseModel;

/**
 * Объект для формирования запроса
 *
 * Class DataContainer
 * @package NovaPoshta\Models
 */
class DataContainer extends BaseModel
{
    public $id;
    public $modelName;
    public $calledMethod;
    public $apiKey;
    public $methodProperties;
    public $language;

    public function getModelName()
    {
        return !empty($this->modelName) ? $this->modelName : '';
    }

    public function getCalledMethod()
    {
        return !empty($this->calledMethod) ? $this->calledMethod : '';
    }

    public function getApiKey()
    {
        return $this->apiKey;
    }

    public function getMethodProperties()
    {
        return $this->methodProperties;
    }

    public function getLanguage()
    {
        return $this->language;
    }
}