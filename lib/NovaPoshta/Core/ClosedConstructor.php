<?php

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