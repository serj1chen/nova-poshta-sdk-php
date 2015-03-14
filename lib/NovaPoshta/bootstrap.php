<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 14.03.2015
 * Time: 20:38
 */

include_once 'Core/autoload.php';

if (!defined('NP_API2_ROOT')) {
    define('NP_API2_ROOT', dirname(__FILE__) . '/');
    define('NP_API2_NAME_LIB', 'NovaPoshta\\');

    Autoload::init();
}