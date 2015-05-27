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
	

	protected function _paramsFilter(&$params){
		$params['access_token'] = $this->access_token;
	}
}
