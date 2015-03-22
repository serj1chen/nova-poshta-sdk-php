<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 14.03.2015
 * Time: 20:38
 */

include_once 'Core/autoload.php';

if (!defined('NOVA_POSHTA_PATH')) {
    define('NOVA_POSHTA_PATH', dirname(__FILE__) . '/');

    Autoload::init();
}