<?php

namespace NovaPoshta\Core;

use NovaPoshta\Config;

class Connect
{
    
    public static function sendQueryToApi($data)
    {
         try {
            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, Config::getUrlApi());
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_HTTPHEADER, Array("Content-Type: text/plain"));
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

            $response = curl_exec($ch);

            curl_close($ch);

            return $response;
        } catch (\Exception $e) {
            return false;
        }
    }
}
