<?php

namespace NovaPoshta\Core\Logger;

class DataLogger
{
    public $toData = null;
    public $toOriginalData = null;
    public $toBatchData = array();
    public $fromOriginalData = null;
    public $fromData = null;
    public $fromBatchData = array();
}