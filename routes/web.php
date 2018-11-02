<?php

use Illuminate\Support\Facades\Redis;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/redis/{message?}', function ($message = 'default message') {

    $data = [
        'event' => 'test-event',
        'data' => $message
    ];

    // publish event with Redis directly
    Redis::publish('test-channel', json_encode($data));

    return 'Redis::publish';
});



