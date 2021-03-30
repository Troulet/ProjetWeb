<?php

use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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
    return view('TESTADMIN');
});

Route::get('/admin', function () {
    return view('welcome_admin');
});

Route::post('/user', function (Request $request) {
    return redirect()->route('/admin');
    return redirect()->action([AuthController::class, 'Login'], [$request]);
});
