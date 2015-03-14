<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11.03.2015
 * Time: 22:47
 */

namespace NovaPoshta\Core\Serializer;

use NovaPoshta\Models\DataContainer;

interface SerializerInterface
{
    /**
     * @param DataContainer $data
     * @return mixed
     */
    public function serializeData(DataContainer $data);

    /**
     *
     * @param string $data
     * @return mixed
     */
    public function unserializeData($data);
}