<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\EventController;
use App\Http\Controllers\Pages\PagesController;
use App\Http\Controllers\Pages\InvokePagesController;

Route::get('/', InvokePagesController::class)->name('index');

Route::get('/events/{slug}', EventController::class)->name('events.show');

Route::get('/{page:slug}', PagesController::class)->name('page.show');
