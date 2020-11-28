<?php 
namespace Satriyop\Joker\Facades;

use Illuminate\Support\Facades\Facade;

class Joker extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'joker';
    }
}