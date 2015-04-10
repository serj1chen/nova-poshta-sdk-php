<?php

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