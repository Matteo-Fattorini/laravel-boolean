<?php

use Illuminate\Support\Facades\Route;
use config\routes;
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

Route::get('/', "home@index")->name("home");
Route::get('/corso', "corso@index")->name("corso");

Route::get('/dopo_il_corso', "dopo_corso@index")->name("dopo_il_corso");

Route::get('/camp_gratuito', "camp@index")->name("camp_gratuito");
