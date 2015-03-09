<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19.02.2015
 * Time: 0:22
 */

namespace NovaPoshta\DataMethods;

/**
 * Class BasePrintDocument
 * @package NovaPoshta\DataMethods
 * @property string DocumentRefs
 * @property string Type
 * @property string Copies
 */
class BasePrintDocument extends \stdClass
{
    protected function __construct()
    {
    }

    public function setDocumentRefs(array $value)
    {
        $this->DocumentRefs = $value;
        return $this;
    }

    public function getDocumentRefs()
    {
        return $this->DocumentRefs;
    }

    public function clearDocumentRefs()
    {
        $this->DocumentRefs = array();
        return $this;
    }

    public function addDocumentRef($value)
    {
        if(!isset($this->DocumentRefs)){
            $this->DocumentRefs = array();
        }
        $this->DocumentRefs[] = $value;
        return $this;
    }

    public function setType($value)
    {
        $this->Type = $value;
        return $this;
    }

    public function getType()
    {
        return $this->Type;
    }

    public function setCopies($value)
    {
        $this->Copies = $value;
        return $this;
    }

    public function getCopies()
    {
        return $this->Copies;
    }
}