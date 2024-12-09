<?php

use Livewire\Livewire;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\OtherPagesController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {

    Livewire::setUpdateRoute(function ($handle) {
        return Route::post('/custom/livewire/update', $handle);
    });

    Route::get('/', HomeController::class)->name('home');
    Route::get('/o-nas', AboutController::class)->name('about');
    Route::get('/apartamenty', [RoomController::class,'index'])->name('room.index');
    Route::get('/apartament-z-1-sypialnia', [RoomController::class,'roomFirst'])->name('room.first');
    Route::get('/apartament-z-widokiem-na-gory', [RoomController::class,'roomSecond'])->name('room.second');
    Route::get('/lokalizacja', LocationController::class)->name('location');
    Route::get('/galeria', GalleryController::class)->name('gallery');
    Route::get('/kontakt', ContactController::class)->name('contact');
    Route::get('/polityka-prywatnosci', [OtherPagesController::class,'privacyPolicy'])->name('privacy-policy');


    Route::fallback(function () {
        return redirect('/');
    });
});
