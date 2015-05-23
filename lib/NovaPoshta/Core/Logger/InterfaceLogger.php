<?php

namespace NovaPoshta\Core\Logger;

/**
 * Логирования
 * Interface Logger
 * @package NovaPoshta\Core
 */
interface InterfaceLogger
{
    /**
     * Данные оригинальные
     * @param $fromData string запрос
     * @param $toData string ответ
     * @return mixed
     */
    public static function setOriginalData($toData, $fromData);

    /**
     *
     * @param $fromData
     * @param $toData
     * @return mixed
     */
    public static function setData($toData, $fromData);
}