<?php namespace Canducci\QuickResponse\Facades;

use Illuminate\Support\Facades\Facade;

class QuickResponse extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Canducci\QuickResponse\Contracts\IQuickResponse';
    }
}