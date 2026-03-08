<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\PaymentServices\PaymentServiceInterface;
use App\Services\PaymentServices\PaypalAPIService;
use App\Services\PaymentServices\GPayAPIService;

class PaymentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // CallBack way if we want instance or singleton we can
        // $this->app->bind(PaypalAPIService::class, function(){
        //     return new PaypalAPIService(transection_id:"transection_id".rand(0,1500));
        // },shared:true);

        // instance way
        // $paypal = new PaypalAPIService(transection_id:"transection_id".rand(0,1500));
        // $this->app->instance(PaypalAPIService::class, $paypal);

        $this->app->bind(PaymentServiceInterface::class, PaypalAPIService::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
