<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('Home.layouts.home_page');
    // return view('Admin.Dashboard.dashboard');
    return view('Auth.verify');

});
