<?php namespace LasseRafn\CvrApi;

use Illuminate\Support\ServiceProvider;

class CvrApiServiceProvider extends ServiceProvider
{
	/**
	 * Boot
	 */
	public function boot()
	{
		$configPath = __DIR__ . '/config/cvrapi.php';
		$this->mergeConfigFrom($configPath, 'cvrapi');

		$configPath = __DIR__ . '/config/cvrapi.php';

		if (function_exists('config_path')) {
			$publishPath = config_path('cvrapi.php');
		} else {
			$publishPath = base_path('config/cvrapi.php');
		}

		$this->publishes([$configPath => $publishPath], 'config');
	}
}