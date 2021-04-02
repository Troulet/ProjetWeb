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
use App\Http\Controllers\AdministratorController;

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


    //Chemin pour afficher la page de création d'un User
    Route::get('/Users_Create', [UsersController::class, 'GetCreationPage']);

    //Chemin pour poster l'Utilisateur Créer
    Route::post('/Users_Create', [UsersController::class, 'Create_User']);

    //Chemin pour poster les modifications sur un Utilisateur
    Route::post('/Users_Update', [UsersController::class, 'Update_User']);

    //Chemin pour supprimer un Utilisateur
    Route::post('/Users_Delete', [UsersController::class, 'Delete'])

    //Chemin pour afficher la page de création d'une entreprise
    Route::get('/Enterprise_Create', [EnterpriseController::class, 'GetCreatePage']);

    //Chemin pour afficher la page de création d'une offre
    Route::get('/Offer_Create', [InternshipController::class, 'GetCreatePage']);

    //Chemin pour afficher la page de création d'un commentaire sur une entreprise
    Route::get('/Commentary_Create', [EnterpriseController::class, 'GetCreateCommentPage']);

    //Chemin pour poster un commentaire sur une entreprise
    Route::post('/Enterprise_Commentary', [EnterpriseController::class, 'PostComment']);

    //Route::get('/Enterprise_Profile', [EnterpriseController::class, 'GetComment']);

    //Chemin pour poster une nouvelle entreprise
    Route::post('/Entreprise_Create', [ EnterpriseController::class, 'Create']);

    //Chemin pour poster les modifications d'une Entreprise'
    Route::post('/Enterprise_Update', [ EnterpriseController::class, 'Update']);

    //Chemin pour supprimer une Entreprise
    Route::post('/Enterprise_delete', [EnterpriseController::class, 'Delete']);

    Route::post('/Offer_Create' , [InternshipController::class, 'Create']);

    Route::post('/Offer_Update', [InternshipController::class, 'Update']);

    Route::post('/Postulate', [PostulateController::class, 'Create']);

    Route::post('/Stats', [PostulateController::class, 'Update']);

    Route::post('/Stats', [InformController::class, 'Create3']);

    Route::post('/Stats', [InformController::class, 'Create4']);

    Route::post('/Stats', [InformController::class, 'Create5']);

    Route::post('/Stats', [InformController::class, 'Create6']);



Route::fallback( function () {
        return view('login');
    });

