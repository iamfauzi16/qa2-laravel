<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use Slides\Saml2\Http\Controllers\Saml2Controller;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/saml2/login', [Saml2Controller::class , 'login']);

Route::post('/saml2/acs', [Saml2Controller::class , 'acs']);

Route::middleware('saml')->group(function () {
Route::get('/home', [HomeController::class,'index'])->name('home');
#code
});


