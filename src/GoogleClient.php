<?php
namespace ZenAPI;

class GoogleClient extends BaseClient{
	/**
	 * 
	 * @var string
	 */
	public $access_token;
	/**
	 * Set up the API root URL.
	 *
     * @url https://developers.google.com/apis-explorer/#p/oauth2/v2/
     *
     * @ignore
	 */
	public $host = 'https://www.googleapis.com/';
    /**
     * @var string
     */
    public $format = 'json';
    public $decode_json = true;

    /**
	 *
	 * @param string $access_token
	 */
	public function __construct($access_token = NULL) {
		$this->access_token = $access_token;
	}
	
	public function parseResponse($response){
		if ($this->format === 'json' && $this->decode_json) {
			$json = json_decode($response);		//	解析成对象而不是关联数组
			if ($json !== null)
				return $json;
		}
		return $response;
	}
	
	protected function _paramsFilter(&$params){
		$params['access_token'] = $this->access_token;
	}
}
