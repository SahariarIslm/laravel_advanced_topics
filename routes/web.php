<?php

use Illuminate\Support\Facades\Route;

// service container is a container that manages all the services / depedencies from laravel core
// Route::get('/', function () {
//     dd(
//         app(\App\Services\PaymentServices\PaypalAPIService::class),
//         app(\App\Services\PaymentServices\PaypalAPIService::class)
//     );
// });

Route::get('/', function (\App\Services\PaymentServices\PaymentServiceInterface $payment) {
    return $payment->checkout();
});
