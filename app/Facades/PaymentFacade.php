<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;
use App\Services\PaymentServices\PaymentServiceInterface;

class PaymentFacade extends Facade
{
    public static function getFacadeAccessor(): string
    {
        return paymentServiceInterface::class;
    }
}
