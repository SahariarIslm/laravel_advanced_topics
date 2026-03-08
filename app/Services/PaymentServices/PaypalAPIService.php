<?php

namespace App\Services\PaymentServices;

class PaypalAPIService implements PaymentServiceInterface
{
    public function checkout(): string
    {
        return "You did checkout from PayPal";
    }

}
