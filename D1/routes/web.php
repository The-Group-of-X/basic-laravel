<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    $data = "Apekshya Ghimire";
    return view('welcome', [
        'username' => $data
    ]);
});

Route::get('/team', function () {
    return view('team');
});


Route::get('/{username}', function ($username = null) {
    return view('info', [
        'u' => $username ?? 'No User Name Available'
    ]);
});
