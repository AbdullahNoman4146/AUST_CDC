<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/events', 'pages.events')->name('events');
Route::view('/resources', 'pages.resources')->name('resources');
Route::view('/team', 'pages.team')->name('team');
Route::view('/contact', 'pages.contact')->name('contact');

Route::fallback(function () {
    return response()->view('pages.not-found', [], 404);
});
