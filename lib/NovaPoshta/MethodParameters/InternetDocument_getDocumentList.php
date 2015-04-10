<?php

namespace NovaPoshta\MethodParameters;

/**
 * Параметры метода getDocumentList модели InternetDocument
 *
 * Class InternetDocument_getDocumentList
 * @package NovaPoshta\DataMethods
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
class InternetDocument_getDocumentList extends MethodParameters
{
    /**
     * Сортировка по убыванию
     */
    const ORDER_DIRECTION_DESC = 'DESC';
    /**
     * Сортировка по возрастанию
     */
    const ORDER_DIRECTION_ASC = 'ASC';

    /**
     * Сортировка по полю номер документа
     */
    const ORDER_FIELD_IntDocNumber = 'IntDocNumber';
    /**
     * Сортировка по полю дата отправки
     */
    const ORDER_FIELD_DateTime = 'DateTime';
    /**
     * Сортировка по полю вес
     */
    const ORDER_FIELD_Weight = 'Weight';
    /**
     * Сортировка по полю стоимость товара
     */
    const ORDER_FIELD_Cost = 'Cost';
    /**
     * Сортировка по полю количество мест
     */
    const ORDER_FIELD_SeatsAmount = 'SeatsAmount';
    /**
     * Сортировка по полю цена доставки
     */
    const ORDER_FIELD_CostOnSite = 'CostOnSite';
    /**
     * Сортировка по полю дата создания
     */
    const ORDER_FIELD_CreateTime = 'CreateTime';
    /**
     * Сортировка по полю дата доставки
     */
    const ORDER_FIELD_EstimatedDeliveryDate = 'EstimatedDeliveryDate';
    /**
     * Сортировка по полю статус доставки
     */
    const ORDER_FIELD_StateId = 'StateId';
    /**
     * Сортировка по полю внутренний номер клиента
     */
    const ORDER_FIELD_InfoRegClientBarcodes = 'InfoRegClientBarcodes';
    /**
     * Сортировка по полю дата фактическая дата доставки
     */
    const ORDER_FIELD_RecipientDateTime = 'RecipientDateTime';

    /**
     *
     *
     * @param $value
     * @return $this
     */
    public function setIntDocNumber($value)
    {
        $this->IntDocNumber = $value;
        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getIntDocNumber()
    {
        return $this->IntDocNumber;
    }

    /**
     *
     *
     * @param $value
     * @return $this
     */
    public function setInfoRegClientBarcodes($value)
    {
        $this->InfoRegClientBarcodes = $value;
        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getInfoRegClientBarcodes()
    {
        return $this->InfoRegClientBarcodes;
    }

    /**
     *
     *
     * @param $value
     * @return $this
     */
    public function setDeliveryDateTime($value)
    {
        $this->DeliveryDateTime = $value;
        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getDeliveryDateTime()
    {
        return $this->DeliveryDateTime;
    }

    // фактична дата доставки
    /**
     *
     *
     * @param $value
     * @return $this
     */
    public function setRecipientDateTime($value)
    {
        $this->RecipientDateTime = $value;
        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getRecipientDateTime()
    {
        return $this->RecipientDateTime;
    }

    /**
     *
     *
     * @param $value
     * @return $this
     */
    public function setCreateTime($value)
    {
        $this->CreateTime = $value;
        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getCreateTime()
    {
        return $this->CreateTime;
    }

    /**
     *
     *
     * @param $value
     * @return $this
     */
    public function setSenderRef($value)
    {
        $this->SenderRef = $value;
        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getSenderRef()
    {
        return $this->SenderRef;
    }

    /**
     *
     *
     * @param $value
     * @return $this
     */
    public function setRecipientRef($value)
    {
        $this->RecipientRef = $value;
        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getRecipientRef()
    {
        return $this->RecipientRef;
    }

    /**
     *
     *
     * @param $value
     * @return $this
     */
    public function setWeightFrom($value)
    {
        $this->WeightFrom = $value;
        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getWeightFrom()
    {
        return $this->WeightFrom;
    }

    /**
     *
     *
     * @param $value
     * @return $this
     */
    public function setWeightTo($value)
    {
        $this->WeightTo = $value;
        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getWeightTo()
    {
        return $this->WeightTo;
    }

    /**
     *
     *
     * @param $value
     * @return $this
     */
    public function setCostFrom($value)
    {
        $this->CostFrom = $value;
        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getCostFrom()
    {
        return $this->CostFrom;
    }

    /**
     *
     *
     * @param $value
     * @return $this
     */
    public function setCostTo($value)
    {
        $this->CostTo = $value;
        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getCostTo()
    {
        return $this->CostTo;
    }

    /**
     *
     *
     * @param $value
     * @return $this
     */
    public function setSeatsAmountFrom($value)
    {
        $this->SeatsAmountFrom = $value;
        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getSeatsAmountFrom()
    {
        return $this->SeatsAmountFrom;
    }

    /**
     *
     *
     * @param $value
     * @return $this
     */
    public function setSeatsAmountTo($value)
    {
        $this->SeatsAmountTo = $value;
        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getSeatsAmountTo()
    {
        return $this->SeatsAmountTo;
    }

    /**
     *
     *
     * @param $value
     * @return $this
     */
    public function setCostOnSiteFrom($value)
    {
        $this->CostOnSiteFrom = $value;
        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getCostOnSiteFrom()
    {
        return $this->CostOnSiteFrom;
    }

    /**
     *
     *
     * @param $value
     * @return $this
     */
    public function setCostOnSiteTo($value)
    {
        $this->CostOnSiteTo = $value;
        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getCostOnSiteTo()
    {
        return $this->CostOnSiteTo;
    }

    /**
     *
     *
     * @param array $value
     * @return $this
     */
    public function setStateIds(array $value)
    {
        $this->StateIds = $value;
        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getStateIds()
    {
        return $this->StateIds;
    }

    /**
     *
     *
     * @param $value
     * @return $this
     */
    public function setDateTime($value)
    {
        $this->DateTime = $value;
        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getDateTime()
    {
        return $this->DateTime;
    }

    /**
     *
     *
     * @param $value
     * @return $this
     */
    public function setDateTimeFrom($value)
    {
        $this->DateTimeFrom = $value;
        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getDateTimeFrom()
    {
        return $this->DateTimeFrom;
    }

    /**
     *
     *
     * @param $value
     * @return $this
     */
    public function setIsAfterpayment($value)
    {
        $this->isAfterpayment = $value;
        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getIsAfterpayment()
    {
        return $this->isAfterpayment;
    }

    /**
     *
     *
     * @param $value
     * @return $this
     */
    public function setPage($value)
    {
        $this->Page = $value;
        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getPage()
    {
        return $this->Page;
    }

    /**
     *
     *
     * @param $value
     * @return $this
     */
    public function setOrderField($value)
    {
        $this->OrderField = $value;
        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getOrderField()
    {
        return $this->OrderField;
    }

    /**
     *
     *
     * @param $value
     * @return $this
     */
    public function setOrderDirection($value)
    {
        $this->OrderDirection = $value;
        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getOrderDirection()
    {
        return $this->OrderDirection;
    }

    /**
     *
     *
     * @param $value
     * @return $this
     */
    public function setScanSheetRef($value)
    {
        $this->ScanSheetRef = $value;
        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getScanSheetRef()
    {
        return $this->ScanSheetRef;
    }
}