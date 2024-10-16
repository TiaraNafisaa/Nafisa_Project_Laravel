<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index'); // menuju ke file welcome.blade.php
});

Route::get('/login', function () {
    return view('login'); // menuju ke file login
});

Route::get('/welcome', function () {
    return view('welcome'); // menuju ke file welcome.blade.php
});

Route::get('/about', function () {
    return "Tentang Que"; // menuju ke file text Tentang Que
});
