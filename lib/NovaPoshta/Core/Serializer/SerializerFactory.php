<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 11.03.2015
 * Time: 22:45
 */

namespace NovaPoshta\Core\Serializer;

use NovaPoshta\Config;
use NovaPoshta\Core\NovaPoshtaException;

class SerializerFactory
{
    /**
     * @return SerializerInterface
     * @throws NovaPoshtaException
     */
    static public function getSerializer()
    {
        $format = strtoupper(Config::getFormat());
        $dataSerializer = 'NovaPoshta\Core\Serializer\DataSerializer' . $format;
        if (!class_exists($dataSerializer)) {
            throw new NovaPoshtaException('NovaPoshta\Core\Serializer\SerializerFactory_NO_SERIALIZER');
        }
        $serializer = new $dataSerializer();

        return $serializer;
    }
}