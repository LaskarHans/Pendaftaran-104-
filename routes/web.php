<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing-page');
});

Route::get('/register', function () {
    return view('form');
});

Route::get('/validate', function () {
    return view('validate');
});

Route::get('/user', function () {
    return view('user');
});





