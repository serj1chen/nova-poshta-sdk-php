<?php

namespace NovaPoshta;

/**
 * @author user
 * @version 1.0
 * @created 10-���-2015 23:34:41
 */
class Config
{
    const FORMAT_JSON = 'json';
    const FORMAT_JSONRPC2 = 'jsonrpc2';
    const FORMAT_XML = 'xml';

    const LANGUAGE_UA = 'ua';
    const LANGUAGE_RU = 'ru';
    const LANGUAGE_EN = 'en';

    static private $apiKey = '';
    static private $format = self::FORMAT_JSON;
    static private $language = self::LANGUAGE_UA;
    static private $urlApi = 'https://api.novaposhta.ua/v2.0/';
    static private $urlMyNovaPoshta = 'https://my.novaposhta.ua';

    static public function getApiKey()
    {
        return self::$apiKey;
    }

    static public function setApiKey($value)
    {
        self::$apiKey = $value;
    }

    static public function getFormat()
    {
        return self::$format;
    }

    static public function setFormat($value)
    {
        self::$format = $value;
    }

    static public function getLanguage()
    {
        return self::$language;
    }

    static public function setLanguage($value)
    {
        self::$language = $value;
    }

    static public function getUrlApi()
    {
        return self::$urlApi . self::$format . '/';
    }

    static public function getUrlMyNovaPoshta()
    {
        return self::$urlMyNovaPoshta;
    }
}