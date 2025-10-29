<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('layouts.frontend');
});


Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/user', function () {
    return view('users.dashboard');
});

