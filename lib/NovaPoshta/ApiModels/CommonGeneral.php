<?php

namespace NovaPoshta\ApiModels;

use NovaPoshta\Core\ApiModel;
use NovaPoshta\MethodParameters\MethodParameters;

/**
 * CommonGeneral - Модель для работы со справочниками
 *
 * Class CommonGeneral
 * @package NovaPoshta\ApiModels
 */
class CommonGeneral extends ApiModel
{
    /**
     * Вызвать метод getMessageCodeText() - получить список ошибок с описанием на 3 языках
     *
     * @return \NovaPoshta\Models\DataContainerResponse
     */
    public static function getMessageCodeText()
    {
        return self::sendData(__FUNCTION__);
    }


}