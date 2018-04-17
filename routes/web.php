<?php

use Illuminate\Support\Facades\Redis;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/redis', function () {


    $data = [
        'event' => 'event_name',
        'data' => 'socket message'
    ];


    // publish event with Redis directly
    Redis::publish('test-channel', json_encode($data));


    return 'socket start';
});



