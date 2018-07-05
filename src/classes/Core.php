<?php
session_start();
/*
@project APIDataBank PHP SDK
@author Precious Opusunju (haxorpreshy@gmail.com)
*/
class Core {
	public $base_url = 'https://endpoint.larrysing.website';
	public $token_code;
	public $response_key = 'k';

	public function __construct() {
		
	}

	public function init($key) {

		$endpoint = $this->base_url.'/public/oauth/authorize';

		$headers = array('Accept' => 'application/json');
		$query = array('key' => $key);

		$response_key = Unirest\Request::post($endpoint, $headers, $query);

		$_SESSION['_response_token_code'] = $response_key->body->token;

	}

	public function service_request($endpoint) {
		
		$headers = array('Authorization', 'Token '.$_SESSION['_response_token_code']);
		$response = Unirest\Request::get($endpoint, $headers, []);

		var_dump( $response );

	}

	public function run() {
		// unset token
		
	}
}
?>