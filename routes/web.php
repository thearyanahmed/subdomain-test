<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::domain('{account}.nomadstrail.co')->group(function () {
    Route::get('/user/{id}', function (string $account, string $id) {
        return [
            'userid' => $id,
            'account' => $account
        ]
    });
});
