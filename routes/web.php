<?php

use Illuminate\Support\Facades\Route;


//Cambio de idioma
Route::get('lang/{lang}', function($lang) {
  \Session::put('lang', $lang);
  return \Redirect::back();
})->middleware('web')->name('change_lang');


Route::get('/', function () { return view('welcome'); });
Route::get('/home', function () { return view('welcome'); });


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
