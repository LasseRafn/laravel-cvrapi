<?php namespace LasseRafn\CvrApi;

use LasseRafn\CvrApi\Models\Business;
use LasseRafn\CvrApi\Utils\Request;

class CvrApi
{
	protected $request;

	public function __construct()
	{
		$this->request = new Request(config( 'cvrapi.endpoint' ));
	}


	/**
	 * @param string $query
	 * @param string $country
	 *
	 * @return Business
	 */
	public function get($query = '', $country = 'dk')
	{
		$response = $this->request->get($query, $country);

		// todo throw error..

		return new Business($response);
	}
}