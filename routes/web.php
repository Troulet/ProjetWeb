<?php

use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\EnterpriseController;
use App\Http\Controllers\InternshipController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PilotController;

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
    

    Route::get('/Logout', [AuthController::class, 'Logout']);

    Route::get('/Offer', [UsersController::class, 'GetOfferPage']);

    Route::get('/Contact', [UsersController::class, 'GetContactPage']);

    Route::get('/Postulate', [UsersController::class, 'GetPostulatePage']);

    Route::get('/Help', function() {
        return view('Help');
    });

    Route::get('/Users', [UsersController::class, 'GetUsersPage']);

    Route::post('/Home', [AuthController::class, 'Login']);

    Route::get('/Home', [UsersController::class, 'GetHomePage']);

    Route::post('/Offer', [EnterpriseController::class, 'PostComment']);

    Route::get('/Offer', [EnterpriseController::class, 'GetComment']);

    Route::post('/Offer/Entreprise', [ EnterpriseController::class, 'Create']);

    Route::post('/Offer/Entreprise', [ EnterpriseController::class, 'Update']);

    Route::post('/Offer', [InternshipController::class, 'Create']);

    Route::post('/Offer', [InternshipController::class, 'Update']);

    Route::post('/admin/pilot', [PilotController::class, 'Create']);

    Route::post('/admin/pilot', [PilotController::class, 'Update']);

    Route::post('/admin/student', [StudentController::class, 'Create']);

    Route::post('/admin/student', [StudentController::class, 'Update']);




Route::fallback( function () {
        return view('login');
    });

