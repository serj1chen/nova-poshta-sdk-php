<?php

namespace NovaPoshta\Models;

use NovaPoshta\Core\BaseModel;

/**
 * Контейнер с ответом сервера
 *
 * Class DataContainerResponse
 * @package NovaPoshta\Models
 */
class DataContainerCache extends BaseModel
{
    public $statusConfig;
    public $statusActual;
    public $dataOldSec;
    public $error = array();

    public function __construct(\stdClass $data = null)
    {
        parent::__construct();

        if ($data) {
            foreach ($data as $key => $value) {
                $this->{$key} = $value;
            }
        }
    }
}
