<?php

use Illuminate\Support\Facades\Route;
use App\Services\PaymentServices\PaypalAPIService;
// service container is a container that manages all the services / depedencies from laravel core
Route::get('/', function (PaypalAPIService $paypayAPIService) {
    dump($paypayAPIService->processPayment());
    dd(app());
});
