<?php namespace Fahim\PaypalIPN;

use Illuminate\Support\ServiceProvider;

class PaypalIPNServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->make('Fahim\PaypalIPN\PaypalIPNListener');
	}

}
