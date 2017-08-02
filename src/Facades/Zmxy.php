<?php

namespace Earnp\Zmxy\Facades;

use Illuminate\Support\Facades\Facade;

class Zmxy extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'zmxy';
    }
}
