<?php

namespace NovaPoshta\Core;

use NovaPoshta\ApiModels\InternetDocument;
use stdClass;
use NovaPoshta\Config;
use NovaPoshta\Models\DataContainer;

/**
 * @author user
 * @version 1.0
 * @created 10-���-2015 23:41:09
 */
class CoreHelper
{
	static public function getPrintLink($typePrint, \stdClass $data = null)
	{
		$refs = isset($data->DocumentRefs) ? $data->DocumentRefs : null;

		if(empty($refs)){
			return '';
		}

		$link = '';
		$link .= Config::getUrlMyNovaPoshta() . '/orders/' . $typePrint;

		foreach($refs as $ref){
			if(isset($data->Copies) && $data->Copies == InternetDocument::PRINT_COPIES_FOURFOLD){
				$link .= '/orders[]/' . $ref;
			}

			$link .= '/orders[]/' . $ref;
		}

		if(isset($data->Type)){
			$link .= '/type/' . $data->Type;
		}

		$link .= '/apiKey/' . Config::getApiKey();

		return $link;
	}
}