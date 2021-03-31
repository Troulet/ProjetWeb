<?php

use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\RedirectResponse;

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
    return view('login');
});

Route::get('/Offer', [UsersController::class, 'GetOfferPage']);

Route::get('/Contact', [UsersController::class, 'GetContactPage']);

Route::get('/Postulate', [UsersController::class, 'GetPostulatePage']);

Route::get('/Help', function() {
    return view('Help');
});

Route::get('/Users', [UsersController::class, 'GetUsersPage']);

Route::get('/admin', function () {
    return view('welcome_admin');
});

Route::post('/admin', function () {
    return view('welcome_admin');
});

Route::post('/Home', [AuthController::class, 'Login']);

Route::get('/Home', [UsersController::class, 'GetHomePage']);
