<?php

namespace App\Services\PaymentServices;

class GPayAPIService implements PaymentServiceInterface
{
    public function checkout(): string
    {
        return "You did checkout from GPay";
    }
}
