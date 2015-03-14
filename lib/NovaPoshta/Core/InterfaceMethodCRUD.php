<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 01.03.2015
 * Time: 13:05
 */

namespace NovaPoshta\Core;


interface InterfaceMethodCRUD
{
    public function save();

    public function update();

    public function delete();
}