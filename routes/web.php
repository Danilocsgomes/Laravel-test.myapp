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
Route::get('businesses/{business}', [\App\Models\BusinessController::class, 'show'])->name('businesses.show');
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

Route::post('create', []);
