<?php

namespace NovaPoshta\MethodParameters;

/**
 * Параметры метода getAreas модели Address
 *
 * Class AddressGetAreas
 * @package NovaPoshta\DataMethods
 * @property string Ref
 * @property string Page
 */
class AddressGetAreas extends MethodParameters
{
    /**
     * Устанавливает реф
     *
     * @param $value
     * @return $this
     */
    public function setRef($value)
    {
        $this->Ref = $value;
        return $this;
    }

    /**
     * Возвращает реф
     *
     * @return string
     */
    public function getRef()
    {
        return $this->Ref;
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
}