<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});


Route::get('international-partner', function () {
    return view('frontend.international-partner');
});

Route::get('our-events', function () {
    return view('frontend.events');
});

Route::get('sponsors', function () {
    return view('frontend.sponsors');
});
