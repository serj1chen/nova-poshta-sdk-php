<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 14.03.2015
 * Time: 9:39
 */

namespace NovaPoshta\Core;


abstract class BaseModel extends \stdClass
{
    public function __construct()
    {
    }

    public function __set($name, $value)
    {
        $method = 'set' . $name;
        if (method_exists($this, $method)) {
            $this->{$method}($value);
        } else {
            $this->{$name} = $value;
        }
    }

    public function __get($name)
    {
        if (!property_exists($this, $name)) {
            $this->{$name} = null;
        };
        $method = 'get' . $name;
        if (method_exists($this, $method)) {
            return $this->{$method}();
        }
        return null;
    }
}