<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/gago', function () {
    return 'Bari galust Gago jan';
});
