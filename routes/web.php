<?php

use App\Http\Controllers\BusinessController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Business as BusinessAlias;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;
use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('businesses', [BusinessController::class, 'index']);
Route::get('businesses/{business}', [BusinessController::class, 'show'])->name('businesses.show');
Route::get('users/{user}', [UserController::class, 'show'])->name('users.show');
Route::get('users', [UserController::class, 'index'])->name('users.index');
Route::get('posts', [PostController::class, 'index'])->name('posts.index');
Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Processo
//Route::post('/algumacoisa', function() {
//    return 'Processando';
//});

// Atualização
//Route::put('/algumacoisa', function() {
//    return 'Atualizado';
//});

// Processo de atualização para 1 único registro.
//Route::patch('/algumacoisa', function () {
//    return 'Atualizado';
//});

// Processo de exclusão
//Route::delete('/algumacoisa', function() {
//    return 'Deletado';
//});

// Enviar Instruções para o back-end
//Route::options('/algumacoisa', function() {
//    return 'Opções';
//});

//Route::controller()->middleware()->prefix()->group(function(){});

//Route::group([
//        'controller' => \App\Http\Controllers\HomeController::class,
//        'middleware' =>'guest',
//        'prefix' => 'users',
//        'as' => 'users.'
//    ],function () {
//    Route::get('/', 'index')->name('index');
//    Route::get('create', 'create')->name('create');
//    Route::post('store',  'store')->name('store');
//    Route::get('{user}',  'show')->name('show');
//    Route::get('{user}/edit', 'edit')->name('edit');
//    Route::put('{user}', 'update')->name('update');
//    Route::delete('{user}', 'destroy')->name('destroy');
//});

//Route::resource('users', \App\Http\Controllers\HomeController::class);
//Route::apiResource('users', \App\Http\Controllers\HomeController::class);
//Route::singleton('users', \App\Http\Controllers\HomeController::class)->creatable();
//Route::apiSingleton('users', \App\Http\Controllers\HomeController::class)->creatable();
