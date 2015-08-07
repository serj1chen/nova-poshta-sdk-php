<?php

namespace NovaPoshta\Core\Logger;
use NovaPoshta\Models\DataContainer;
use NovaPoshta\Models\DataContainerResponse;

/**
 * Логирования
 * Interface Logger
 * @package NovaPoshta\Core
 */
interface InterfaceLogger
{
    /**
     * Данные оригинальные (сырые данные, в тому формате в котором отправляется запрос)
     *
     * @param string $fromData запрос
     * @param string $toData ответ
     * @return mixed
     */
    public static function setOriginalData($toData, $fromData);

    /**
     * Данные объектов запроса/ответа
     *
     * @param DataContainer $toData
     * @param DataContainerResponse $fromData
     * @return mixed
     */
    public static function setData(DataContainer $toData, DataContainerResponse $fromData);
}