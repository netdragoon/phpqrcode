<?php namespace Canducci\QRcode\Providers;

use Illuminate\Support\ServiceProvider;

class QuickResponseProvider extends ServiceProvider {

	public function register()
    {
        $this->app->singleton('Canducci\QRcode\Contracts\IQuickResponse',
        	'Canducci\QRcode\QuickResponse');
    }
}