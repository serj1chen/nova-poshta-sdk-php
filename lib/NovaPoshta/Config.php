<?php

namespace NovaPoshta;

use NovaPoshta\Core\Logger\InterfaceLogger;

/**
 * Конфиг
 *
 * Class Config
 * @package NovaPoshta
 * Fork from github.com serj1chen/nova-poshta-sdk-php
 */
class Config
{
    /**
     * Формат данных в формате JSON
     */
    const FORMAT_JSON = 'json';
    /**
     * Формат данных в формате JSONRPC2
     */
    const FORMAT_JSONRPC2 = 'jsonrpc2';
    /**
     * Формат данных в формате XML
     */
    const FORMAT_XML = 'xml';

    /**
     * Возврат данных на украинском языке
     */
    const LANGUAGE_UA = 'ua';
    /**
     *  Возврат данных на русском языке, если это предусмотрено API Новой почты
     */
    const LANGUAGE_RU = 'ru';
    /**
     * Возврат данных на английский языке, если это предусмотрено API Новой почты
     */
    const LANGUAGE_EN = 'en';
    
    /**
     * Включить кеширование запросов
     */
    const CACHE_STATUS = false;
    /**
     * Путь к файлам хранения кеша
     */
    const CACHE_FILE_PATH = null;
    /**
     * Приставка префикса файлов
     */
    const CACHE_PREFIX = 'npcache';
    /**
     * Время обновления результатов кэша в сек
     */
    const CACHE_TIME = 300;

    /**
     * @var string API ключ
     */
    protected static $apiKey = '';
    /**
     * @var string формат по умолчанию для передачи данных
     */
    protected static $format = self::FORMAT_JSONRPC2; 
    /**
     * @var string язык по умолчанию для передачи данных
     */
    protected static $language = self::LANGUAGE_UA;
    /**
     * @var bool состояние кэша
     */
    protected static $cacheStatus = self::CACHE_STATUS;
    /**
     * @var string путь к директории, где будут хранится файлы кеша
     */
    protected static $cacheFilePath = self::CACHE_FILE_PATH;
    /**
     * @var string приставка префикса файлов
     */
    protected static $cachePrefix = self::CACHE_PREFIX;
    /**
     * @var int время обновления файлов кэша
     */
    protected static $cacheTime = self::CACHE_TIME;
    
    /**
     * @var string URL API2
     */
    protected static $urlApi = 'https://api.novaposhta.ua/v2.0/';
    /**
     * @var string URL личного кабинета Новой Почты
     */
    protected static $urlMyNovaPoshta = 'https://my.novaposhta.ua';

    /**
     * @var InterfaceLogger
     */
    protected static $classLogger;

    /**
     * Возвращает API ключ
     *
     * @return string
     */
    public static function getApiKey()
    {
        return self::$apiKey;
    }

    /**
     * Устанавливает API ключ
     *
     * @param string $value
     */
    public static function setApiKey($value)
    {
        self::$apiKey = $value;
    }

    /**
     * Возвращает формат передачи данных
     *
     * @return string
     */
    public static function getFormat()
    {
        return self::$format;
    }

    /**
     * Устанавливает формат передачи данных
     *
     * @param string $value
     */
    public static function setFormat($value)
    {
        self::$format = $value;
    }

    /**
     * Возвращает язык для ответа с Новой почты
     *
     * @return string
     */
    public static function getLanguage()
    {
        return self::$language;
    }

    /**
     * Устанавливает язык для ответа с Новой почты
     *
     * @param string $value
     */
    public static function setLanguage($value)
    {
        self::$language = $value;
    }

    /**
     * Возвращает состояние кэша
     *
     * @return bool
     */
    public static function getCacheStatus()
    {
        return self::$cacheStatus;
    }
    
    /**
     * Устанавливает состояние кэша
     *
     * @param bool $value
     */
    public static function setCacheStatus($value)
    {
        self::$cacheStatus = $value;
    }
    
    /**
     * Возвращает путь к директории кэша
     *
     * @return string
     */
    public static function getCacheFilePath()
    {
        return self::$cacheFilePath;
    }
    
    /**
     * Устанавливает путь к директории кэша
     *
     * @param string $value
     */
    public static function setCacheFilePath($value)
    {
        self::$cacheFilePath = $value;
    }
    
    //$cachePrefix
    /**
     * Возвращает путь к директории кэша
     *
     * @return string
     */
    public static function getPrefix()
    {
        return self::$cachePrefix;
    }
    
    /**
     * Устанавливает префикс
     *
     * @param string $value
     */
    public static function setPrefix($value)
    {
        self::$cachePrefix = $value;
    }
    
    /**
     * Возвращает время обновления кэша
     *
     * @return bool
     */
    public static function getCacheTime()
    {
        return self::$cacheTime;
    }
    
    /**
     * Устанавливает время обновления кэша
     *
     * @param bool $value
     */
    public static function setCacheTime($value)
    {
        self::$cacheTime = $value;
    }

    /**
     * Возвращает URL API2
     *
     * @return string
     */
    public static function getUrlApi()
    {
        return self::$urlApi . self::$format . '/';
    }
    
    /**
     * Устанавливает URL API2
     *
     * @param string $value
     */
    public static function setUrlApi($value)
    {
        self::$urlApi = $value;
    }

    /**
     * Возвращает URL кабинета Новой Почты
     *
     * @return string
     */
    public static function getUrlMyNovaPoshta()
    {
        return self::$urlMyNovaPoshta;
    }

    /**
     * Установить класс для логирования
     *
     * @param InterfaceLogger $logger
     */
    public static function setClassLogger(InterfaceLogger $logger)
    {
        self::$classLogger = $logger;
    }

    /**
     * Получить класс для логирования
     *
     * @return InterfaceLogger
     */
    public static function getClassLogger()
    {
        return self::$classLogger;
    }
}