<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    $data = "Apekshya Ghimire";
    return view('welcome', [
        'username' => $data
    ]);
});

Route::get('/teesdfsdfseeeeam', function () {
    return view('team');
})->name('team');


// Route::get('/{username}', function ($username = null) {
//     return view('info', [
//         'u' => $username ?? 'No User Name Available'
//     ]);
// });
