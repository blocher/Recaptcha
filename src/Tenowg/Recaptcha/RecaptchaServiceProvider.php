<?php namespace Tenowg\Recaptcha;

use Illuminate\Support\ServiceProvider;

class RecaptchaServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('tenowg/recaptcha', 'Recaptcha');

        $this->app['validator']->resolver(function($translator, $data, $rules, $messages)
        {
            return new \ReCaptchaValidator($translator, $data, $rules, $messages);
        });

        $this->app['filter']->extend(function () {
            return new \RecaptchaFilter();
        });
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
