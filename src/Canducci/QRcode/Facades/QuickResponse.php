<?php namespace Canducci\QRcode\Facades;

use Illuminate\Support\Facades\Facade;

class QuickResponse extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Canducci\QRcode\Contracts\IQuickResponse';
    }
}