<?php

namespace NovaPoshta_example;

include_once "../lib/NovaPoshta/bootstrap.php";
include_once 'autoload_example.php';

$result = Address_example::getAreas();

var_dump($result);