<?php

namespace NovaPoshta\Core;

use NovaPoshta\Core\Serializer\SerializerFactory;
use stdClass;
use NovaPoshta\Config;
use NovaPoshta\Models\DataContainer;

/**
 * @author user
 * @version 1.0
 * @created 10-���-2015 23:41:09
 */
class ApiModel extends BaseModel
{
    protected function getThisData()
    {
        $data = new stdClass();
        foreach ($this as $key => $attr) {
            if (isset($this->{$key})) {
                $data->{$key} = $attr;
            }
        }

        return $data;
    }

    protected function objectInObject(&$fromObject, &$inObject)
    {
        foreach ($fromObject as $key => $value) {
            $inObject->{$key} = $value;
        }
    }

    /**
     * @param $methodName
     * @param null $data
     * @return bool|mixed
     */
    static protected function sendData($methodName, $data = null)
    {
        $serializer = SerializerFactory::getSerializer();

        $dataContainer = new DataContainer();
        $dataContainer->apiKey = Config::getApiKey();
        $dataContainer->language = Config::getLanguage();
        $dataContainer->modelName = self::_getCalledModel();
        $dataContainer->calledMethod = $methodName;
        $dataContainer->methodProperties = $data;

        $data = $serializer->serializeData($dataContainer);
//		var_dump($data);
//		die;

        try {
            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, Config::getUrlApi());
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_HTTPHEADER, Array("Content-Type: text/xml"));
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

            $response = curl_exec($ch);
//			var_dump($response);die;

            $response = $serializer->unserializeData($response);
//			var_dump($response);

            curl_close($ch);

            return $response;
        } catch (\Exception $e) {
            return false;
        }
    }

    static private function _getCalledModel()
    {
        $thisNameClass = explode('\\', get_called_class());

        return end($thisNameClass);
    }
}