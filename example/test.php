<?php

namespace NovaPoshta_example;

include_once "../lib/NovaPoshta/bootstrap.php";
include_once 'autoload_example.php';

//$result = Batch_example::butch();
//$result = Address_example::getAreas();

$result = InternetDocument_example::getDocumentPrice();

var_dump($result);