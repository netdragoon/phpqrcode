<?php namespace Canducci\QuickResponse\Providers;

use Illuminate\Support\ServiceProvider;

class QuickResponseServiceProvider extends ServiceProvider {

    public function register()
    {
        $this->app->singleton('Canducci\QuickResponse\Contracts\IQuickResponse', 'Canducci\QuickResponse\QuickResponse');
    }
}