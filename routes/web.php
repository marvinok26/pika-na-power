<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about-us', function () {
    return view('pages.about');
});

Route::get('/classes', function () {
    return view('pages.classes');
});

Route::get('/articles-resources', function () {
    return view('pages.articles-resources');
});

Route::get('/events', function () {
    return view('pages.events');
});
