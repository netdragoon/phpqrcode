<?php namespace Canducci\QRcode\Providers;

use Illuminate\Support\ServiceProvider;

class QuickResponseProvider extends ServiceProvider {

	public function register()
    {

        $this->app->singleton('Canducci\Weather\Contracts\IWeatherClient',
        	'Canducci\Weather\WeatherClient');
    }
}