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

    private static $apiKey = '';
    private static $format = self::FORMAT_JSON;
    private static $language = self::LANGUAGE_UA;
    private static $urlApi = 'https://api.novaposhta.ua/v2.0/';
    private static $urlMyNovaPoshta = 'https://my.novaposhta.ua';

    public static function getApiKey()
    {
        return self::$apiKey;
    }

    public static function setApiKey($value)
    {
        self::$apiKey = $value;
    }

    public static function getFormat()
    {
        return self::$format;
    }

    public static function setFormat($value)
    {
        self::$format = $value;
    }

    public static function getLanguage()
    {
        return self::$language;
    }

    public static function setLanguage($value)
    {
        self::$language = $value;
    }

    public static function getUrlApi()
    {
        return self::$urlApi . self::$format . '/';
    }

    public static function getUrlMyNovaPoshta()
    {
        return self::$urlMyNovaPoshta;
    }
}