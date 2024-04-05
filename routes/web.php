<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\UserController;
use Carbon\Laravel\ServiceProvider;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/App');
// Route Controller Group
Route::group(['prefix' => '/App', 'controller' => NoteController::class], function () {
    Route::get('/', 'home')->name('homepage');
    Route::get('/newNote', fn() => view('addNote'))->name('addNote');
    Route::post('/create', 'createNote')->name('create');
    Route::get('/singleNote/{note:slug}', 'singleNote')->name('singleNote');
});

Route::group(['prefix' => '/App', 'controller' => UserController::class], function () {
    Route::get('/addUser', fn() => view('login'))->name('User');
    Route::post('/addUser', 'addUser')->name('addUser');
});
