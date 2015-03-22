<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11.03.2015
 * Time: 22:54
 */

namespace NovaPoshta\Core\Serializer;

use NovaPoshta\Core\NovaPoshtaException;
use NovaPoshta\Models\DataContainer;
use NovaPoshta\Models\DataContainerResponse;


class DataSerializerJSON extends SerializerFactory implements SerializerInterface, SerializerBatchInterface
{
    public function serializeData(DataContainer $data)
    {
        $json = json_encode($data);

        return $json;
    }

    public function unserializeData($json)
    {
        $data = (array)json_decode($json);
        if (json_last_error() != JSON_ERROR_NONE) {
            $dataContainerResponse = new DataContainerResponse();
            $dataContainerResponse->success = false;
            $dataContainerResponse->errors[] = array('DataSerializerJSON.DATA_IS_INVALID');

            return $dataContainerResponse;
        }

        $data = json_decode(json_encode($data), false);
        $dataContainerResponse = new DataContainerResponse($data);

        return $dataContainerResponse;
    }

    public function serializeBatchData(array $data)
    {
        $arrayData = array();

        foreach($data as $item){
            if(!$item instanceof DataContainer){
                throw new NovaPoshtaException('NovaPoshta\Core\Serializer\BAD_DATA');
            }
            $arrayData[] = $item;
        }

        $json = json_encode($arrayData);

        return $json;
    }

    public function unserializeBatchData($json)
    {
        $data = (array)json_decode($json);
        if (json_last_error() != JSON_ERROR_NONE) {
            $dataContainerResponse = new DataContainerResponse();
            $dataContainerResponse->success = false;
            $dataContainerResponse->errors[] = array('DataSerializerJSON.DATA_IS_INVALID');

            return $dataContainerResponse;
        }

        $data = json_decode(json_encode($data), false);

        $dataContainerResponses = array();
        foreach($data as $item){
            $dataContainerResponses[] = new DataContainerResponse($item);
        }

        return $dataContainerResponses;
    }
}