<?php

namespace NovaPoshta;

use NovaPoshta\Core\Logger\InterfaceLogger;
use NovaPoshta\Models\DataContainer;
use NovaPoshta\Models\DataContainerResponse;

/**
 * Class Logger
 * @package NovaPoshta
 */
class Logger implements InterfaceLogger
{
    public static function setOriginalData($toData, $fromData){}

    public static function setData(DataContainer $toData, DataContainerResponse $fromData){}
}