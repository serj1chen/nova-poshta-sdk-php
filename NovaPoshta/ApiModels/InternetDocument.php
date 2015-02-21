<?php

namespace NovaPoshta\ApiModels;

use NovaPoshta\Core\ApiModel;

/**
 * @author user
 * @version 1.0
 * @created 15-���-2015 13:01:37
 */
class InternetDocument extends ApiModel
{
	const PRINT_TYPE_PDF = 'Pdf';
	const PRINT_TYPE_HTML = 'Html';

	const PRINT_COPIES_DOUBLE = 'double';
	const PRINT_COPIES_FOURFOLD = 'fourfold';

	public $Sender;
	public $Recipient;

	public $Ref;
	public $DateTime;
	public $ServiceType;
	public $PaymentMethod;
	public $PayerType;
	public $Cost;
	public $SeatsAmount = array();
	public $Description;
	public $CargoType;
	public $CargoDetails;
	public $CargoDescription;
	public $Amount;
	public $Weight;
	public $VolumeWeight;
	public $VolumeGeneral;
	public $OptionsSeat;
	public $Pack;
	public $AdditionalInformation;
	public $PackingNumber;
	public $AccompanyingDocument;
	public $InfoRegClientBarcodes;
	public $BackwardDeliveryData = array();
	public $SaturdayDelivery;
	public $ThirdPerson;
	public $SameDayDelivery;
	public $ForwardingCount;
	public $IsTakeAttorney;
	public $PreferredDeliveryDate;
	public $TimeInterval;

	public function save()
	{
		$data = $this->getThisData();

		$response = $this->sendData(__FUNCTION__, $data);

		if($response->success){
			$this->objectInObject($response->data[0], $this);
		}

		return $response;
	}

	public function update()
	{
		$data = $this->getThisData();

		$response = $this->sendData(__FUNCTION__, $data);

		if($response->success){
			$this->objectInObject($response->data[0], $this);
		}

		return $response;
	}

	public function delete()
	{
		$this->DocumentRefs = array($this->Ref);
		return $this->sendData(__FUNCTION__, $this->getThisData());
	}



	static public function getDocumentDeliveryDate($data)
	{
		return self::sendData(__FUNCTION__, $data);
	}

	static public function getDocument($data)
	{
		return self::sendData(__FUNCTION__, $data);
	}

	static public function getDocumentList($data)
	{
		return self::sendData(__FUNCTION__, $data);
	}

	private function _getPrintLink($typePrint)
	{
		$config = new \Config();

		if(isset($this->DocumentRefs)){
			if(!is_array($this->DocumentRefs)){
				throw new \Exception('InternetDocument.DocumentRefs_IS_NOT_ARRAY');
			}

			$refs = $this->DocumentRefs;
		} else {
			$refs = array($this->Ref);
		}

		if(empty($refs)){
			return '';
		}

		$link = '';
		$link .= $config->urlNewMyClient . '/orders/' . $typePrint;

		foreach($refs as $ref){
			if(isset($this->Copies) && $this->Copies == self::PRINT_COPIES_FOURFOLD){
				$link .= '/orders[]/' . $ref;
			}

			$link .= '/orders[]/' . $ref;
		}

		if(isset($this->Type)){
			$link .= '/type/' . $this->Type;
		}

		$link .= '/apiKey/' . $config->apiKey;

		return $link;
	}

	public function printDocument()
	{
		$link = $this->_getPrintLink('printDocument');

		return $link;
	}

	public function printMarkings()
	{
		$link = $this->_getPrintLink('printMarkings');

		return $link;
	}

	static public function documentsTracking($data)
	{
		return self::sendData(__FUNCTION__, $data);
	}

	static public function getDocumentPrice($data)
	{
		return self::sendData(__FUNCTION__, $data);
	}

}