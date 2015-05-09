<?php

namespace NovaPoshta_example;

Use NovaPoshta\Config;

class Config_example
{
    public static function initConfig()
    {
        Config::setApiKey('ваш ключ');
        Config::setFormat(Config::FORMAT_JSON);
        Config::setLanguage(Config::LANGUAGE_UA);
    }
}


