<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19.02.2015
 * Time: 0:22
 */

namespace NovaPoshta\DataMethods;

/**
 * Class ScanSheet_removeDocuments
 * @package NovaPoshta\DataMethods
 * @property string DocumentRefs
 */
class ScanSheet_removeDocuments extends BaseDataMethod
{
    public function setDocumentRefs(array $documentRefs)
    {
        $this->DocumentRefs = $documentRefs;
        return $this;
    }

    public function getDocumentRefs()
    {
        return $this->DocumentRefs;
    }

    public function addDocumentRef($value)
    {
        if (!$this->DocumentRefs) {
            $this->DocumentRefs = array();
        }
        $this->DocumentRefs[] = $value;
        return $this;
    }

    public function clearDocumentRefs()
    {
        $this->DocumentRefs = array();
        return $this;
    }
}