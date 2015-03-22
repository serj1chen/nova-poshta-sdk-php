<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11.03.2015
 * Time: 22:47
 */

namespace NovaPoshta\Core\Serializer;

use NovaPoshta\Models\DataContainer;

interface SerializerBatchInterface
{
    /**
     * @param array $data
     * @return mixed
     */
    public function serializeBatchData(array $data);

    /**
     *
     * @param string $data
     * @return mixed
     */
    public function unserializeBatchData($data);
}