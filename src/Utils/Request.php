<?php
namespace LasseRafn\CvrApi\Utils;

use GuzzleHttp\Client;
use LasseRafn\CvrApi\Errors\CurlError;

class Request
{
	protected $api_token;
	public    $curl;

	public function __construct( $baseUri = '' )
	{
		$this->curl = new Client( [
			'base_uri' => $baseUri,
		    'headers' => [
			    'User-Agent' => config('cvrapi.your_business')
		    ]
		] );
	}

	public function get( $query = '', $country = 'dk' )
	{
		try
		{
			$url      = config( 'cvrapi.endpoint' ) . "?search={$query}&country={$country}";
			$response = $this->curl->get( $url );

			return json_decode( $response->getBody() );
		} catch ( \Exception $exception )
		{
			throw new CurlError( $exception->getMessage(), $exception->getCode() );
		}
	}
}