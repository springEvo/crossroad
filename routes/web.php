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

Route::get('floor-plan', function () {
    return view('frontend.floor-plan');
});

Route::get('costs', function () {
    return view('frontend.cost');
});

Route::get('sponsorships-opportunities', function () {
    return view('frontend.sponsorships-opportunities');
});

Route::get('exhibitors', function () {
    return view('frontend.exhibitors');
});

Route::get('booth-price', function () {
    return view('frontend.booth-price');
});

Route::get('lucky-draw', function () {
    return view('frontend.lucky-draw');
});

Route::get('sample', function () {
    return view('frontend.sample');
});

Route::get('digital-boards', function () {
    return view('frontend.digital-boards');
});

Route::get('sponsorships', function () {
    return view('frontend.sponsorships');
});

Route::get('international-education-partners', function () {
    return view('frontend.international-education-partners');
});

Route::get('logo-branding', function () {
    return view('frontend.logo-branding');
});

Route::get('contact', function () {
    return view('frontend.contact');
});

