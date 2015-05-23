<?php

namespace NovaPoshta_example;

use NovaPoshta\Logger;

class Logger_example extends Logger
{
    public static function setOriginalData1($toData, $fromData)
    {
        echo 'Send data:';
        echo '<br>';
        echo $toData;

        echo '<br><br>';

        echo 'Response data:';
        echo '<br>';
        echo $fromData;

        echo '<br><br>';
    }

    public static function setData($toData, $fromData)
    {
        echo 'Send data object:';
        echo '<br>';
        echo '<pre>';
        var_dump($toData);
        echo '</pre>';

        echo '<br><br>';

        echo 'Response data object:';
        echo '<br>';
        echo '<pre>';
        var_dump($fromData);
        echo '</pre>';
    }
}
