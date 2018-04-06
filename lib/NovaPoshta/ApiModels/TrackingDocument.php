<?php
/**
 * Created by PhpStorm.
 * User: Vladyslav Tychyna
 * Date: 02.04.18
 * Time: 15:54
 */

namespace NovaPoshta\ApiModels;


use NovaPoshta\Core\ApiModel;
use NovaPoshta\MethodParameters\MethodParameters;

class TrackingDocument extends ApiModel
{
    /**
     * Вызвать метод getStatusDocument() - трекинг документов
     *
     * @param MethodParameters $data
     * @return \NovaPoshta\Models\DataContainerResponse
     */
    public static function getStatusDocuments(MethodParameters $data = null)
    {
        return self::sendData(__FUNCTION__, $data);
    }
}