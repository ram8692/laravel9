<?php

namespace App\MyCustomLibraries;

use Illuminate\Support\Facades\Facade;

class TserFacade extends Facade{

    //below function we have to override from facade class
    protected static function getFacadeAccessor()
    {
        return new Tser();
    }
}


?>