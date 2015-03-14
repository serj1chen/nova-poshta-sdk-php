<?php

if (!defined('NovaPoshta_example')) {
    define('NovaPoshta_example', dirname(__FILE__) . '/');
    define('NovaPoshta_example1', 'NovaPoshta_example\\');

    AutoloadExample::init();
}

class AutoloadExample
{
    public static function init()
    {
        if (function_exists('__autoload')) {
            spl_autoload_register('__autoload');
        }

        return spl_autoload_register(array('AutoloadExample', 'load'));
    }

    public static function load($className)
    {
        $className = str_replace(NovaPoshta_example1, '', $className);
        $className = NovaPoshta_example . $className . '.php';

        if ((file_exists($className) === false) || (is_readable($className) === false)) {
            return false;
        }

        require($className);

        return true;
    }
}