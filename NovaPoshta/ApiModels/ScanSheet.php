<?php

namespace NovaPoshta\ApiModels;

use NovaPoshta\Config;
use NovaPoshta\Core\ApiModel;
use NovaPoshta\Core\CoreHelper;
use NovaPoshta\Core\InterfaceMethodCRUD;
use stdClass;

/**
 * @author user
 * @version 1.0
 * @created 14-���-2015 10:19:25
 * @property array DocumentRefs
 * @property string Ref
 * @property string Date
 */
class ScanSheet extends ApiModel implements InterfaceMethodCRUD
{
	const PRINT_TYPE_PDF = 'pdf';
	const PRINT_TYPE_HTML = 'html';

	public function save()
	{
		$this->Ref = null;
		$data = $this->getThisData();
		return self::sendData('insertDocuments', $data);
	}

	public function update()
	{
		$data = $this->getThisData();
		return self::sendData('insertDocuments', $data);
	}

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
		if(!isset($this->DocumentRefs)){
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

	static public function removeDocuments(stdClass $data = null)
	{
		return self::sendData(__FUNCTION__, $data);
	}

	static public function getScanSheet(stdClass $data = null)
	{
		return self::sendData(__FUNCTION__, $data);
	}

	static public function getScanSheetList(stdClass $data = null)
	{
		return self::sendData(__FUNCTION__, $data);
	}

	static public function printScanSheet(stdClass $data = null)
	{
		$refs = isset($data->DocumentRefs) ? $data->DocumentRefs : null;

		if(empty($refs)){
			return '';
		}

		$link = '';
		$link .= Config::getUrlMyNovaPoshta() . '/scanSheet/printScanSheet';

		foreach($refs as $ref){
			$link .= '/refs[]/' . $ref;
		}

		if(isset($data->Type)){
			$link .= '/type/' . $data->Type;
		}

		$link .= '/apiKey/' . Config::getApiKey();

		return $link;
	}
}
