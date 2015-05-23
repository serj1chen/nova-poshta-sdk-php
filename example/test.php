<?php

namespace NovaPoshta_example;

include_once "../lib/NovaPoshta/bootstrap.php";
include_once 'autoload_example.php';

Config_example::initConfig();


$result = ScanSheet_example::delete();

//var_dump($result);
