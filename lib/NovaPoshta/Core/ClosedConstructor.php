<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 22.03.2015
 * Time: 11:26
 */

namespace NovaPoshta\Core;


abstract class ClosedConstructor
{
    protected function __construct()
    {
    }

    private function __sleep()
    {
    }

    private function __wakeup()
    {
    }

    private function __clone()
    {
    }
}