<?php

namespace NovaPoshta\ApiModels;

use NovaPoshta\Config;
use NovaPoshta\Core\ApiModel;
use NovaPoshta\Core\CoreHelper;
use NovaPoshta\Core\InterfaceMethodCRUD;
use stdClass;

/**
 * ScanSheet - Модель для работы с реестрами приема-передачи отправлений
 *
 * @author user
 * @version 1.0
 * @created 14-���-2015 10:19:25
 * @property array DocumentRefs
 * @property string Ref
 * @property string Date
 *
 * Class ScanSheet
 * @package NovaPoshta\ApiModels
 */
class ScanSheet extends ApiModel implements InterfaceMethodCRUD
{
    const PRINT_TYPE_PDF = 'pdf';
    const PRINT_TYPE_HTML = 'html';

    /**
     * Сохранить экспресс-накладные в реестр
     *
     * Реализация метода insertDocuments() - добавить экспресс-накладные в реестр
     *
     * @return \NovaPoshta\Models\DataContainerResponse
     */
    public function save()
    {
        $this->Ref = null;
        $data = $this->getThisData();
        return self::sendData('insertDocuments', $data);
    }

    /**
     * Обновить экспресс-накладные в реестр
     *
     * Реализация метода insertDocuments() - добавить экспресс-накладные в реестр
     *
     * @return \NovaPoshta\Models\DataContainerResponse
     */
    public function update()
    {
        $data = $this->getThisData();
        return self::sendData('insertDocuments', $data);
    }

    /**
     * Удалить реестр
     *
     * Реализация метода deleteScanSheet() - удалить (расформировать) реестр отправлений
     *
     * @return \NovaPoshta\Models\DataContainerResponse
     */
    public function delete()
    {
        $data = new stdClass();
        $data->ScanSheetRefs = array($this->Ref);
        return self::sendData('deleteScanSheet', $data);
    }

    public function setDocumentRefs(array $documentRefs)
    {
        $this->DocumentRefs = $documentRefs;
        return $this;
    }

    public function addDocumentRef($value)
    {
        if (!isset($this->DocumentRefs)) {
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

    public function setRef($value)
    {
        $this->Ref = $value;
        return $this;
    }

    public function getRef()
    {
        return $this->Ref;
    }

    public function setDate($value)
    {
        $this->Date = $value;
        return $this;
    }

    public function getDate()
    {
        return $this->Date;
    }

    /**
     * removeDocuments() - удалить экспресс-накладные из реестра
     *
     * @param stdClass $data
     * @return \NovaPoshta\Models\DataContainerResponse
     */
    public static function removeDocuments(stdClass $data = null)
    {
        return self::sendData(__FUNCTION__, $data);
    }

    /**
     * getScanSheet() - загрузить информацию по одному реестру
     *
     * @param stdClass $data
     * @return \NovaPoshta\Models\DataContainerResponse
     */
    public static function getScanSheet(stdClass $data = null)
    {
        return self::sendData(__FUNCTION__, $data);
    }

    /**
     * getScanSheetList() - загрузить список реестров
     *
     * @param stdClass $data
     * @return \NovaPoshta\Models\DataContainerResponse
     */
    public static function getScanSheetList(stdClass $data = null)
    {
        return self::sendData(__FUNCTION__, $data);
    }

    /**
     * printScanSheet() - загрузка печатной формы реестра
     *
     * @param stdClass $data
     * @return string
     */
    public static function printScanSheet(stdClass $data = null)
    {
        $refs = isset($data->DocumentRefs) ? $data->DocumentRefs : null;

        if (empty($refs)) {
            return '';
        }

        $link = '';
        $link .= Config::getUrlMyNovaPoshta() . '/scanSheet/printScanSheet';

        foreach ($refs as $ref) {
            $link .= '/refs[]/' . $ref;
        }

        if (isset($data->Type)) {
            $link .= '/type/' . $data->Type;
        }

        $link .= '/apiKey/' . Config::getApiKey();

        return $link;
    }
}
