<?php
/*
@project APIDataBank PHP SDK
@author Precious Opusunju (haxorpreshy@gmail.com)
*/
class APIDATABANK_AIRPORT_SERVICE extends Core {
	public function __construct() {

	}

	public function all() {
		$endpoint = $this->base_url.'/public/airports';
		return $this->service_request($endpoint);
	}
}

$apidatabank_airport_service = new APIDATABANK_AIRPORT_SERVICE();