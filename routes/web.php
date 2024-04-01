<?php

use App\Http\Controllers\NoteController;
use Carbon\Laravel\ServiceProvider;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('homepage');

Route::group(['controller' => NoteController::class], function () {
    Route::post('/create', 'createNote')->name('create');
});

Route::controller(ServiceProvider::class)->group(function() {

});
    