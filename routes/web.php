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
        return view('login/login');
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
    Route::get('/Users_Update', [UsersController::class, 'GetUpdatePage']);

    //Chemin pour poster les modifications sur un Utilisateur
    Route::post('/Users_Update', [UsersController::class, 'Update_User']);

    //Chemin pour supprimer un Utilisateur
    Route::post('/Users_Delete', [UsersController::class, 'DeleteUser']);

    //Chemin pour rechercher un Utilisateur
    Route::post('/Users_Search', [UsersController::class, 'Search']);

    //Chemin pour accéder à la page de modification des droits
    Route::get('/Users_right', [UsersController::class, 'GetRightPage']);

    //Chemin pour poster la modification des droits d'un Délégué'
    Route::post('/Users_right', [UsersController::class, 'UpdateRight']);

    //Chemin pour poster une nouvelle entreprise
    Route::post('/Users_Profil', [ UsersController::class, 'GetProfil']);

    //Chemin pour afficher la page de création d'une entreprise
    Route::get('/Enterprise_Create', [EnterpriseController::class, 'GetCreatePage']);

    //Chemin pour insérer une nouvelle entreprise dans la base
    Route::post('/Enterprise_Create', [EnterpriseController::class, 'Create']);

    //Chemin pour afficher la page de création d'une offre
    Route::get('/Offer_Create', [InternshipController::class, 'GetCreatePage']);

    //Chemin pour insérer une nouvelle Offre dans la base
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

    //Chemin pour poster les modifications d'une Entreprise'
    Route::get('/Enterprise_Update', [ EnterpriseController::class, 'GetUpdatePage']);

    //Chemin pour supprimer une Entreprise
    Route::post('/Enterprise_Delete', [EnterpriseController::class, 'Hide']);

    //Chemin pour restorer une Entreprise
    Route::post('/Enterprise_Restore', [EnterpriseController::class, 'Restore']);

    //Chemin pour poster une nouvelle entreprise
    Route::post('/Enterprise_Profil', [ EnterpriseController::class, 'GetProfil']);

    //Chemin pour afficher le résultat d'une recherche d'Entreprise/Offre
    Route::post('Offer_Search', [EnterpriseController::class, 'Search']);

    //Chemin pour poster une nouvelle Offre
    Route::get('/Offer_Create' , [InternshipController::class, 'GetCreatePage']);
    //Chemin pour poster une nouvelle Offre
    Route::post('/Offer_Create' , [InternshipController::class, 'Create']);

    //Chemin pour poster les modifications sur une Offre
    Route::get('/Offer_Update', [InternshipController::class, 'GetUpdatePage']);

    //Chemin pour poster les modifications sur une Offre
    Route::post('/Offer_Update', [InternshipController::class, 'Update']);

    //Chemin pour Supprimer une offre
    Route::post('/Offer_Delete', [InternshipController::class, 'ForceDelete']);

    //Chemin pour poster une nouvelle entreprise
    Route::post('/Offer_Profil', [ InternshipController::class, 'GetProfil']);

    //Chemin pour afficher le formulaire de candidature
    Route::get('/Postulate_Create', [PostulateController::class, 'Create']);

    //Chemin pour poster la réponse de l'Entreprise (Inform step 2)
    Route::post('/Postulate_Update', [PostulateController::class, 'Update']);

    //Chemin pour transmettre une fiche de Validation à l'enseignant-tuteur'
    Route::post('/Stats', [InformController::class, 'Create3']);

    //Chemin pour transmettre une fiche de validation à l'assistant administratif'
    Route::post('/Stats', [InformController::class, 'Create4']);

    //Chemin pour prévenir le Tuteur et l'Eleve qu'une Convention de Stage a été envoyée à l'entreprise'
    Route::post('/Stats', [InformController::class, 'Create5']);

    //Chemin pour prévenir le Tuteur et l'Eleve qu'une Convention de Stage signée a été reçue
    Route::post('/Stats', [InformController::class, 'Create6']);



Route::fallback( function () {
        return view('login');
    });

