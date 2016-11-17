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
		$this->publishes( [
			__DIR__ . '/config/cvrapi.php' => config_path( 'cvrapi.php' )
		] );
	}

	/**
	 * Register
	 */
	public function register()
	{
		$this->app->bind( 'cvrapi', function ( $app )
		{
			return new CvrApi( $app );
		} );
	}
}