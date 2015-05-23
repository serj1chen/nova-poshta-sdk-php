<?php

namespace NovaPoshta_example;

include_once "../lib/NovaPoshta/bootstrap.php";
include_once 'autoload_example.php';

Config_example::initConfig();


$result = Test_example::test();

var_dump($result);
