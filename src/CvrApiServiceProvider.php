<?php namespace LasseRafn\CvrApi;

use Illuminate\Support\ServiceProvider;

class CvrApiServiceProvider extends ServiceProvider
{
	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = true;

	/**
	 * Boot
	 */
	public function boot()
	{
		$configPath = __DIR__ . '/../config/cvrapi.php';
		$this->mergeConfigFrom($configPath, 'cvrapi');
	}
}