<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\UserController;
use Carbon\Laravel\ServiceProvider;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/App');
// Route Controller Group
Route::group(['prefix' => '/App', 'controller' => NoteController::class], function () {
    Route::get('/newNote', fn() => view('addNote'))->name('addNote');
    Route::get('/', 'home')->name('homepage');
    Route::post('/create', 'createNote')->name('create');
    Route::get('/show', 'showNotes')->name('show');
    Route::get('/singleNote/{note:slug}', 'singleNote')->name('singleNote');
    Route::get('/deleteNote/{note:title}', 'deleteNote')->name('deleteNote');
});

Route::group(['prefix' => '/App', 'controller' => UserController::class], function () {
    Route::get('/User', fn() => view('login'))->name('User');
    Route::post('/addUser', 'addUser')->name('addUser');
});
