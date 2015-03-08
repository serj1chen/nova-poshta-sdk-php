<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19.02.2015
 * Time: 0:22
 */

namespace NovaPoshta\DataMethods;

/**
 * Class InternetDocument_printDocument
 * @package NovaPoshta\DataMethods
 * @property string DocumentRefs
 * @property string Type
 * @property string Copies
 */
class InternetDocument_printDocument extends BasePrintDocument
{
    public function __construct()
    {
        parent::__construct();
    }
}