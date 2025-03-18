<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('Home.layouts.master');
    return view('Admin.Dashboard.dashboard');

});
