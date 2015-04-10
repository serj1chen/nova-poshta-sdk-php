<?php

namespace NovaPoshta\MethodParameters;

/**
 * Параметры метода getStreet модели Address
 *
 * Class Address_getStreet
 * @package NovaPoshta\DataMethods
 * @property string CityRef
 * @property string Page
 * @property string FindByString
 */
class Address_getStreet extends MethodParameters
{
    /**
     * Устанавливает реф города
     *
     * @param $value
     * @return $this
     */
    public function setCityRef($value)
    {
        $this->CityRef = $value;
        return $this;
    }

    /**
     * Возвращает реф города
     *
     * @param $value
     * @return string
     */
    public function getCityRef($value)
    {
        return $this->CityRef;
    }

    /**
     * Устанавливает страницу
     *
     * @param $value
     * @return $this
     */
    public function setPage($value)
    {
        $this->Page = $value;
        return $this;
    }

    /**
     * Возвращает страницу
     *
     * @return string
     */
    public function getPage()
    {
        return $this->Page;
    }

    /**
     * Устанавливает строку для поиска улицы
     *
     * @param $value
     * @return $this
     */
    public function setFindByString($value)
    {
        $this->FindByString = $value;
        return $this;
    }

    /**
     * Возвращает строку для поиска улицы
     *
     * @return string
     */
    public function getFindByString()
    {
        return $this->FindByString;
    }
}