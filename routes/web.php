<?php

use Illuminate\Support\Facades\Route;
/* Route::get('/', function () {
    return view('welcome');
}); */
//Route::get('/', fn() => view('index'));
Route::controller(App\Http\Controllers\ScheduleController::class)->group(function () {
    Route::get('/', 'showSchedule')->name('tablo.index');
    
}); 