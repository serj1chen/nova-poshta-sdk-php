<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19.02.2015
 * Time: 0:22
 */

namespace NovaPoshta\DataMethods;

/**
 * Class InternetDocument_documentsTracking
 * @package NovaPoshta\DataMethods
 * @property string Documents
 */
class InternetDocument_documentsTracking extends BaseDataMethod
{
    public function setDocuments(array $value)
    {
        $this->Documents = $value;
        return $this;
    }

    public function getDocuments()
    {
        return $this->Documents;
    }

    public function addDocument($value)
    {
        if (!$this->Documents) {
            $this->Documents = array();
        }
        $this->Documents[] = $value;
        return $this;
    }

    public function clearDocuments()
    {
        $this->DocumentRefumentRefs = array();
        return $this;
    }
}