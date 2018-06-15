<?php

namespace NovaPoshta\Core;

use NovaPoshta\Config;
use NovaPoshta\Models\DataContainerCache;

class Cache
{
    private static $cache;
    private static $filePath;
    private static $dataOldSec;
    
    /**
     * Выбор источника данных: API (Online) или кэш
     * @param dataContainer $dataContainer - нужен для генерации имени файла
     */
    public static function getSource($dataContainer)
    {
        self::$cache = new DataContainerCache();
        self::$cache->error = [];
        self::$cache->dataOldSec = 0;
        
        if (Config::getCacheStatus() === true) {
            self::$cache->statusConfig = true;
            $checkFilePath = self::checkFilePath();
                
            if (count(self::$cache->error) == 0) {
                $fileName = self::getFileName($dataContainer);
                self::$filePath = self::getFilePath($fileName);
                $cacheStatus = self::checkCacheStatus(self::$filePath);
                if ($cacheStatus === 'ok') {
                    $source = 'cache';
                } else {
                    $source = 'api';
                }
                self::$cache->statusActual = $cacheStatus;
            } else {
                self::$cache->statusActual = 'error';
            }
        } else {
            self::$cache->statusConfig = false;
            self::$cache->statusActual = false;
        }

    return $source;
    }
    
    
    public static function getCacheLog($data)
    {
        if (self::$cache->statusActual === 'update') {
            self::runCacheUpdate($data);
        }
        
        return self::$cache;
    }
    
    
    public static function getCache()
    {
        if (isset(self::$filePath)) {
            $data = file_get_contents(self::$filePath);
            self::$cache->statusActual = 'ok';
            self::$cache->dataOldSec = self::$dataOldSec;
        } else {
            $data = null;
        }
        
        return $data;
    }
    
    
    protected static function runCacheUpdate($data)
    {
        file_put_contents(self::$filePath, $data);
    }
    
    
    public static function checkCacheStatus($filePath)
    {
        if (is_readable($filePath)) {
            if (is_writable($filePath)) {
                $stat = stat($filePath);
                $ctime = $stat['ctime'];
                self::$dataOldSec = time() - $ctime;
                if (self::$dataOldSec > Config::getCacheTime()) {
                    $cacheStatus = 'update';
                } else {
                    $cacheStatus = 'ok';
                }
            } else {
                $cacheStatus = 'error';
                self::$cache->error = ['Cache.FILE_PATH_NOT_REWRITABLE'];
            }
        } else {
            if (is_file($filePath)) {
                $cacheStatus = 'error';
                self::$cache->error = ['Cache.FILE_PATH_NOT_READABLE'];
            }
            else {
                if (@touch($filePath)) {
                    $cacheStatus = 'update';
                } else {
                    $cacheStatus = 'error';
                    self::$cache->error = ['Cache.FILE_PATH_NOT_CREATE'];
                }
            }
        }
        
        return $cacheStatus;
    }
    
    
    public static function getFilePath($fileName)
    {
        $filePath = Config::getCacheFilePath().$fileName.'.txt';
        
        return $filePath;
    }
    
    
    public static function getFileName($dataContainer)
    {
        $fileName = $dataContainer->modelName.'_'.$dataContainer->calledMethod;
        $fileName = Config::getPrefix().'_'.$fileName;
        
        return $fileName;
    }
    
    
    public static function checkFilePath ()
    {
        if (Config::getCacheFilePath() === null) {
            self::$cache->error = ['Cache.FILE_PATH_NOT_SET'];
        } else {
            if (!is_dir(Config::getCacheFilePath())) {
                self::$cache->error = ['Cache.FILE_PATH_DIR_NOT_AVAILABLE'];
            }
        }
    }
}
