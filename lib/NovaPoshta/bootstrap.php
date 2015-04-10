<?php

include_once 'Core/autoload.php';

if (!defined('NOVA_POSHTA_PATH')) {
    define('NOVA_POSHTA_PATH', dirname(__FILE__) . '/');

    Autoload::init();
}