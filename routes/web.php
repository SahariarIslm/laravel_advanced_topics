<?php

use Illuminate\Support\Facades\Route;
use App\Facades\PaymentFacade;
// service container is a container that manages all the services / depedencies from laravel core
// Route::get('/', function () {
//     dd(
//         app(\App\Services\PaymentServices\PaypalAPIService::class),
//         app(\App\Services\PaymentServices\PaypalAPIService::class)
//     );
// });

// Route::get('/', function () {
//     return PaymentFacade::checkout();
// });

Route::get('/', function (\Illuminate\Contracts\Cache\Factory $cache) {
    $collection = collect([16,1,2,2,3,4,5,6,7,8,9,10]);
    // dd($collection->get(0));
    // dd($collection->count(0));
    // dd($collection->sum());
    // dd($collection->avg());
    // $collection->chunk(3);
    // $collection->dump();
    // $collection->dd();
    // return $collection->duplicates();
    // return $collection->shuffle();
    // return $collection->min();
    // return $collection->max();
    // return $collection->mode();
    // return $collection->mode();
    // return $collection->median();
    // return $collection->first();
    // return $collection->last();
    // return $collection->last();
    // $users = \App\Models\User::all();
    // return $users->pluck('name');
    // return $users->unique('created_at');
    // return $users->whereIn('name',['Prof. Octavia Keeling','Gail Williamson','Linnea Reichel']);
    // return $users->whereBetween('age',['12','76']);
    // return $collection->join(", ",", and ");
    // return $collection->toArray();
    // return $collection->toJson();
    // $new_collection = $collection->map(function ($value){
    //     return $value*2;
    // });
    // dd($new_collection);
    // $collection->transform(function ($value){
    //     return $value*2;
    // });
    // $filter=$collection->filter(function ($value){
    //     return $value>5;
    // });
    // dd($filter);
    // $filter=$collection->reject(function ($value){
    //     return $value>5;
    // });
    // dd($filter);

    // $users = \App\Models\User::cursor()->remember();
    // dump($users);
    // foreach($users->take(10) as $user){
    //     echo $user->name;
    //     echo "<br>";
    // }
    // echo "<br>";
    // echo "<br>";
    // echo "<br>";
    // foreach($users->take(10) as $user){
    //     echo $user->name;
    //     echo "<br>";
    // }



    // ####### Contracts #########

    // \Illuminate\Support\Facades\Cache::put('name', "Sahariar Islam");

    // dd(\Illuminate\Support\Facades\Cache::get('name'));

    $cache->put("name","Torikul");
    dd($cache->get('name'));
});
