<?php
/**
 * Created by PhpStorm.
 * User: Vladyslav Tychyna
 * Date: 02.04.18
 * Time: 16:12
 */

namespace NovaPoshta\MethodParameters;


/**
 * Параметры метода getStatusDocuments модели TrackingDocument
 *
 * Class TrackingDocument_getStatusDocuments
 * @package NovaPoshta\DataMethods
 * @property array Documents
 */
class TrackingDocument_getStatusDocuments extends MethodParameters
{

    /**
     * Устанавливает номера документов
     *
     * @param array $value
     *
     * @return $this
     */
    public function addDocuments(array $value)
    {

        $this->Documents = $value;

        return $this;
    }

    /**
     * Устанавливает номер документа
     *
     * @return string
     */
    public function getDocuments()
    {
        return $this->Documents;
    }

    /**
     * Добавить номер документа
     *
     * @param string $value
     *
     * @return $this
     */
    public function addDocument($value)
    {
        if (!$this->Documents) {
            $this->Documents = [];
        }
        $this->Documents[] = $value;

        return $this;
    }

    /**
     * Очищить номера документов
     *
     * @return $this
     */
    public function clearDocuments()
    {
        $this->DocumentRefumentRefs = array();

        return $this;
    }
}