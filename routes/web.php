<?php

use App\Http\Controllers\classificados;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\index;
use App\Http\Controllers\oficinas;

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


Route::get('/', [index::class, 'index'])->name('index');
Route::get('/oficinas', [oficinas::class, 'index'])->name('oficinas');
Route::get('/classficados', [classificados::class, 'index'])->name('classificados');
