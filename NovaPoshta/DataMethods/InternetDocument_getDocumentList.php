<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19.02.2015
 * Time: 0:22
 */

namespace NovaPoshta\DataMethods;

/**
 * Class InternetDocument_getDocumentList
 * @package NovaPoshta\DataMethods
 * @property string Ref
 * @property string IntDocNumber
 * @property string InfoRegClientBarcodes
 * @property string DeliveryDateTime
 * @property string RecipientDateTime
 * @property string CreateTime
 * @property string SenderRef
 * @property string RecipientRef
 * @property string WeightFrom
 * @property string WeightTo
 * @property string CostFrom
 * @property string CostTo
 * @property string SeatsAmountFrom
 * @property string SeatsAmountTo
 * @property string CostOnSiteFrom
 * @property string CostOnSiteTo
 * @property string StateIds
 * @property string DateTime
 * @property string DateTimeFrom
 * @property string isAfterpayment
 * @property string Page
 * @property string OrderField
 * @property string OrderDirection
 * @property string ScanSheetRef
 */
class InternetDocument_getDocumentList extends \stdClass
{
    const ORDER_DIRECTION_DESC = 'DESC';
    const ORDER_DIRECTION_ASC = 'ASC';

    const ORDER_FIELD_IntDocNumber = 'IntDocNumber';
    const ORDER_FIELD_DateTime = 'DateTime';
    const ORDER_FIELD_Weight = 'Weight';
    const ORDER_FIELD_Cost = 'Cost';
    const ORDER_FIELD_SeatsAmount = 'SeatsAmount';
    const ORDER_FIELD_CostOnSite = 'CostOnSite';
    const ORDER_FIELD_CreateTime = 'CreateTime';
    const ORDER_FIELD_EstimatedDeliveryDate = 'EstimatedDeliveryDate';
    const ORDER_FIELD_StateId = 'StateId';
    const ORDER_FIELD_InfoRegClientBarcodes = 'InfoRegClientBarcodes';
    const ORDER_FIELD_RecipientDateTime = 'RecipientDateTime';

    public function setRef($value)
    {
        $this->Ref = $value;
        return $this;
    }

    public function getRef()
    {
        return $this->Ref;
    }

    public function setIntDocNumber($value)
    {
        $this->IntDocNumber = $value;
        return $this;
    }

    public function getIntDocNumber()
    {
        return $this->IntDocNumber;
    }

    public function setInfoRegClientBarcodes($value)
    {
        $this->InfoRegClientBarcodes = $value;
        return $this;
    }

    public function getInfoRegClientBarcodes()
    {
        return $this->InfoRegClientBarcodes;
    }

    public function setDeliveryDateTime($value)
    {
        $this->DeliveryDateTime = $value;
        return $this;
    }

    public function getDeliveryDateTime()
    {
        return $this->DeliveryDateTime;
    }

    public function setRecipientDateTime($value)
    {
        $this->RecipientDateTime = $value;
        return $this;
    }

    public function getRecipientDateTime()
    {
        return $this->RecipientDateTime;
    }

    public function setCreateTime($value)
    {
        $this->CreateTime = $value;
        return $this;
    }

    public function getCreateTime()
    {
        return $this->CreateTime;
    }

    public function setSenderRef($value)
    {
        $this->SenderRef = $value;
        return $this;
    }

    public function getSenderRef()
    {
        return $this->SenderRef;
    }

    public function setRecipientRef($value)
    {
        $this->RecipientRef = $value;
        return $this;
    }

    public function getRecipientRef()
    {
        return $this->RecipientRef;
    }

    public function setWeightFrom($value)
    {
        $this->WeightFrom = $value;
        return $this;
    }

    public function getWeightFrom()
    {
        return $this->WeightFrom;
    }

    public function setWeightTo($value)
    {
        $this->WeightTo = $value;
        return $this;
    }

    public function getWeightTo()
    {
        return $this->WeightTo;
    }

    public function setCostFrom($value)
    {
        $this->CostFrom = $value;
        return $this;
    }

    public function getCostFrom()
    {
        return $this->CostFrom;
    }

    public function setCostTo($value)
    {
        $this->CostTo = $value;
        return $this;
    }

    public function getCostTo()
    {
        return $this->CostTo;
    }

    public function setSeatsAmountFrom($value)
    {
        $this->SeatsAmountFrom = $value;
        return $this;
    }

    public function getSeatsAmountFrom()
    {
        return $this->SeatsAmountFrom;
    }

    public function setSeatsAmountTo($value)
    {
        $this->SeatsAmountTo = $value;
        return $this;
    }

    public function getSeatsAmountTo()
    {
        return $this->SeatsAmountTo;
    }

    public function setCostOnSiteFrom($value)
    {
        $this->CostOnSiteFrom = $value;
        return $this;
    }

    public function getCostOnSiteFrom()
    {
        return $this->CostOnSiteFrom;
    }

    public function setCostOnSiteTo($value)
    {
        $this->CostOnSiteTo = $value;
        return $this;
    }

    public function getCostOnSiteTo()
    {
        return $this->CostOnSiteTo;
    }

    public function setStateIds($value)
    {
        $this->StateIds = $value;
        return $this;
    }

    public function getStateIds()
    {
        return $this->StateIds;
    }

    public function setDateTime($value)
    {
        $this->DateTime = $value;
        return $this;
    }

    public function getDateTime()
    {
        return $this->DateTime;
    }

    public function setDateTimeFrom($value)
    {
        $this->DateTimeFrom = $value;
        return $this;
    }

    public function getDateTimeFrom()
    {
        return $this->DateTimeFrom;
    }

    public function setIsAfterpayment($value)
    {
        $this->isAfterpayment = $value;
        return $this;
    }

    public function getIsAfterpayment()
    {
        return $this->isAfterpayment;
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

    public function setOrderField($value)
    {
        $this->OrderField = $value;
        return $this;
    }

    public function getOrderField()
    {
        return $this->OrderField;
    }

    public function setOrderDirection($value)
    {
        $this->OrderDirection = $value;
        return $this;
    }

    public function getOrderDirection()
    {
        return $this->OrderDirection;
    }

    public function setScanSheetRef($value)
    {
        $this->ScanSheetRef = $value;
        return $this;
    }

    public function getScanSheetRef()
    {
        return $this->ScanSheetRef;
    }
}