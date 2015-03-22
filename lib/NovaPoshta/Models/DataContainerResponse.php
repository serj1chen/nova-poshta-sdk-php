<?php

namespace NovaPoshta\Models;

use NovaPoshta\Core\BaseModel;

/**
 * @author user
 * @version 1.0
 * @created 12-���-2015 19:39:31
 */
class DataContainerResponse extends BaseModel
{
    public $id;
    public $success;
    public $data = array();
    public $errors = array();
    public $warnings = array();
    public $info = array();

    public function __construct(\stdClass $data = null)
    {
        if ($data) {
            foreach ($data as $key => $value) {
                $this->{$key} = $value;
            }
        }
    }
}