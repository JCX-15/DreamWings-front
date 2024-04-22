<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\principalController;
use App\Http\Controllers\registroController;
use App\Http\Controllers\tablaController;
use App\Http\Controllers\avionController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [loginController::class, 'login'])->name('login');

Route::get('/home', [principalController::class, 'home'])->name('home');

Route::get('/registro', [registroController::class, 'registro'])->name('registro');

Route::get('/tabla', [tablaController::class, 'tabla'])->name('tabla');

Route::get('compra', [avionController::class, 'compra'])->name('compra');
