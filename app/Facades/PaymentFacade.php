<?php

namespace App\Facades;

use App\Service\AwesomeServiceInterface;
use Illuminate\Support\Facades\Facade;

class PaymentFacade extends Facade
{
    public static function getFacadsAccessor():string
    {
        return AwesomeServiceInterface::class;
    }
}
