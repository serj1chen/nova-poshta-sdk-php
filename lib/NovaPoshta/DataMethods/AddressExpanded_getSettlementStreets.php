<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19.02.2015
 * Time: 0:22
 */

namespace NovaPoshta\DataMethods;

/**
 * Class Address_getStreet
 * @package NovaPoshta\DataMethods
 * @property string Parent
 * @property string Page
 */
class AddressExpanded_getSettlementStreets extends BaseDataMethod
{
    public function setSettlement($value)
    {
        $this->Settlement = $value;
        return $this;
    }

    public function getSettlement()
    {
        return $this->Settlement;
    }

    public function setPage($value)
    {
        $this->Page = $value;
        return $this;
    }

    public function getPage()
    {
        return $this->Page;
    }
}