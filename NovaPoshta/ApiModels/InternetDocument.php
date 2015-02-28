<?php

namespace NovaPoshta\ApiModels;

use NovaPoshta\Models\BackwardDeliveryData;
use NovaPoshta\Models\Cargo;
use NovaPoshta\Models\OptionsSeat;
use stdClass;
use NovaPoshta\Core\ApiModel;
use NovaPoshta\Models\CounterpartyContact;

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
	public $ThirdPerson;

	public $Ref;
	public $DateTime;
	public $ServiceType;
	public $PaymentMethod;
	public $PayerType;
	public $Cost;
	public $SeatsAmount;
	public $Description;
	public $CargoType;
	public $CargoDescription;
	public $Amount;
	public $Weight;
	public $VolumeWeight;
	public $VolumeGeneral;
	public $Pack;
	public $AdditionalInformation;
	public $PackingNumber;
	public $InfoRegClientBarcodes;
	public $SaturdayDelivery;
	public $SameDayDelivery;
	public $ForwardingCount;
	public $IsTakeAttorney;
	public $PreferredDeliveryDate;
	public $TimeInterval;
	public $NumberOfFloorsLifting;
	public $AccompanyingDocuments;

	public $CargoDetails = array();
	public $OptionsSeat = array();
	public $BackwardDeliveryData = array();

	private function getDataInternetDocument()
	{
		$data = new stdClass();

		foreach($this as $key => $attr){
			if($key == 'Sender' && isset($attr)){
				$data->CitySender = $attr->getCity();
				$data->Sender = $attr->getRef();
				$data->SenderAddress = $attr->getAddress();
				$data->ContactSender = $attr->getContact();
				$data->SendersPhone = $attr->getPhone();
			} elseif($key == 'Recipient' && isset($attr)){
				$data->CityRecipient = $attr->getCity();
				$data->Recipient = $attr->getRef();
				$data->RecipientAddress = $attr->getAddress();
				$data->ContactRecipient = $attr->getContact();
				$data->RecipientsPhone = $attr->getPhone();
			} elseif($key == 'OptionsSeat' && isset($attr)){
				$optionsSeats = array();
				foreach($attr as $optionsSeat){
					$optionsSeats[] = (array)$optionsSeat;
				}
				$data->{$key} = $optionsSeats;
				$data->Weight = 1;
//			} elseif($key == 'BackwardDeliveryData' && !empty($attr)){
//				foreach($attr as $tray){
//					var_dump($tray);die;
//				}
//				$data->{$key} = $attr;

			} elseif(isset($this->{$key})){
				$data->{$key} = $attr;
			}
		}

		return $data;
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

	public function setSender(CounterpartyContact $counterparty)
	{
		$this->Sender = $counterparty;
		return $this;
	}

	public function getSender()
	{
		return $this->Sender;
	}

	public function setRecipient(CounterpartyContact $counterparty)
	{
		$this->Recipient = $counterparty;
		return $this;
	}

	public function getRecipient()
	{
		return $this->Recipient;
	}

	public function setThirdPerson(CounterpartyContact $counterparty)
	{

	}

	public function getThirdPerson()
	{

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

	public function setServiceType($value)
	{
		$this->ServiceType = $value;
		return $this;
	}

	public function getServiceType()
	{
		return $this->ServiceType;
	}

	public function setPaymentMethod($value)
	{
		$this->PaymentMethod = $value;
		return $this;
	}

	public function getPaymentMethod()
	{
		return $this->PaymentMethod;
	}

	public function setPayerType($value)
	{
		$this->PayerType = $value;
		return $this;
	}

	public function getPayerType()
	{
		return $this->PayerType;
	}

	public function setCost($value)
	{
		$this->Cost = $value;
		return $this;
	}

	public function getCost()
	{
		return $this->Cost;
	}

	public function setSeatsAmount($value)
	{
		$this->SeatsAmount = $value;
		return $this;
	}

	public function getSeatsAmount()
	{
		return $this->SeatsAmount;
	}

	public function setDescription($value)
	{
		$this->Description = $value;
		return $this;
	}

	public function getDescription()
	{
		return $this->Description;
	}

	public function setCargoType($value)
	{
		$this->CargoType = $value;
		return $this;
	}

	public function getCargoType()
	{
		return $this->CargoType;
	}

	public function setCargoDescription($value)
	{
		$this->CargoDescription = $value;
		return $this;
	}

	public function getCargoDescription()
	{
		return $this->CargoDescription;
	}

	public function setAmount($value)
	{
		$this->Amount = $value;
		return $this;
	}

	public function getAmount()
	{
		return $this->Amount;
	}

	public function setWeight($value)
	{
		$this->Weight = $value;
		return $this;
	}

	public function getWeight()
	{
		return $this->Weight;
	}

	public function setVolumeWeight($value)
	{
		$this->VolumeWeight = $value;
		return $this;
	}

	public function getVolumeWeight()
	{
		return $this->VolumeWeight;
	}

	public function setVolumeGeneral($value)
	{
		$this->VolumeGeneral = $value;
		return $this;
	}

	public function getVolumeGeneral()
	{
		return $this->VolumeGeneral;
	}

	public function setPack($value)
	{
		$this->Pack = $value;
		return $this;
	}

	public function getPack()
	{
		return $this->Pack;
	}

	public function setAdditionalInformation($value)
	{
		$this->AdditionalInformation = $value;
		return $this;
	}

	public function getAdditionalInformation()
	{
		return $this->AdditionalInformation;
	}

	public function setPackingNumber($value)
	{
		$this->PackingNumber = $value;
		return $this;
	}

	public function getPackingNumber()
	{
		return $this->PackingNumber;
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

	public function setSaturdayDelivery($value)
	{
		$this->SaturdayDelivery = $value;
		return $this;
	}

	public function getSaturdayDelivery()
	{
		return $this->SaturdayDelivery;
	}

	public function setSameDayDelivery($value)
	{
		$this->SameDayDelivery = $value;
		return $this;
	}

	public function getSameDayDelivery()
	{
		return $this->SameDayDelivery;
	}

	public function setForwardingCount($value)
	{
		$this->ForwardingCount = $value;
		return $this;
	}

	public function getForwardingCount()
	{
		return $this->ForwardingCount;
	}

	public function setIsTakeAttorney($value)
	{
		$this->IsTakeAttorney = $value;
		return $this;
	}

	public function getIsTakeAttorney()
	{
		return $this->IsTakeAttorney;
	}

	public function setPreferredDeliveryDate($value)
	{
		$this->PreferredDeliveryDate = $value;
		return $this;
	}

	public function getPreferredDeliveryDate()
	{
		return $this->PreferredDeliveryDate;
	}

	public function setTimeInterval($value)
	{
		$this->TimeInterval = $value;
		return $this;
	}
//ops
	public function getTimeInterval()
	{
		return $this->TimeInterval;
	}

	public function addCargoDetail(Cargo $value)
	{
		$this->CargoDetails[] = $value;
		return $this;
	}

	public function getCargoDetails()
	{
		return $this->CargoDetails;
	}

	public function clearCargoDetails()
	{
		$this->CargoDetails = array();
		return $this;
	}

	public function addOptionsSeat(OptionsSeat $value)
	{
		$this->OptionsSeat[] = $value;
		return $this;
	}

	public function getOptionsSeat()
	{
		return $this->OptionsSeat;
	}

	public function clearOptionsSeat()
	{
		$this->OptionsSeat = array();
		return $this;
	}

	public function addBackwardDeliveryData(BackwardDeliveryData $value)
	{
		$this->BackwardDeliveryData[] = $value;
		return $this;
	}

	public function getBackwardDeliveryData()
	{
		return $this->BackwardDeliveryData;
	}

	public function clearBackwardDeliveryData()
	{
		$this->BackwardDeliveryData = array();
		return $this;
	}

	public function setNumberOfFloorsLifting($value)
	{
		$this->NumberOfFloorsLifting = $value;
		return $this;
	}

	public function getNumberOfFloorsLifting()
	{
		return $this->NumberOfFloorsLifting;
	}

	public function setAccompanyingDocuments($value)
	{
		$this->AccompanyingDocuments = $value;
		return $this;
	}

	public function getAccompanyingDocuments()
	{
		return $this->AccompanyingDocuments;
	}














	public function save()
	{
		return $this->sendData(__FUNCTION__, $this->getDataInternetDocument());
	}

	public function update()
	{
		return $this->sendData(__FUNCTION__, $this->getDataInternetDocument());
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