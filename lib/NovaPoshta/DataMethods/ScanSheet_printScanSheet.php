<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19.02.2015
 * Time: 0:22
 */

namespace NovaPoshta\DataMethods;

/**
 * Class ScanSheet_printScanSheet
 * @package NovaPoshta\DataMethods
 * @property string Ref
 */
class ScanSheet_printScanSheet extends BasePrintDocument
{
    public function __construct()
    {
        parent::__construct();
    }

    public function addNumber($value)
    {
        return $this->addDocumentRef($value);
    }

    public function setNumbers(array $numbers)
    {
        return $this->setDocumentRefs($numbers);
    }

    public function getNumbers()
    {
        return $this->getDocumentRefs();
    }

    public function clearNumber()
    {
        return $this->clearDocumentRefs();
    }
}