<?php

namespace NovaPoshta\MethodParameters;

/**
 * Параметры метода getCounterpartyContactPersons модели Counterparty
 *
 * Class Address_getStreet
 * @package NovaPoshta\DataMethods
 * @property string Ref
 * @property string Page
 */
class Counterparty_getCounterpartyContactPersons extends MethodParameters
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
     * Получить реф
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
     * Получить страницу
     *
     * @return string
     */
    public function getPage()
    {
        return $this->Page;
    }
}