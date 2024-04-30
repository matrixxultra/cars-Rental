<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

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

// HADCHI dial les Clients


Route::get("/" , [ClientController::class,"homepage"]);
Route::get("/about",[ClientController::class,"about"]);
Route::get("/cars",[ClientController::class,"cars"]);
Route::get("/showCar/{id}",[ClientController::class,"showCar"]);
Route::get("/contact",[ClientController::class,"contact"]);

//Location
Route::middleware("verauth")->group(function () {
    Route::get('/louer/{id}',[ClientController::class,"louer"]);
    Route::post('/uplouer/{id}',[ClientController::class , "store_location"]);
});


//Authentification
Route::get("/login",[ClientController::class,"login"]);
Route::post("/verifier",[ClientController::class , "verifier"])->middleware("check");

// Création de Compte
Route::get("/create",[ClientController::class,"createAccount"]);
Route::post("/store",[ClientController::class,"store"]);

// Log Out
Route::post("/deconnect",[ClientController::class , "deconnect"]);

//Hadchi Dial Admins
Route::middleware("verrole")->group(function() {
    Route::get("/admin",[AdminController::class,"index"]);

    Route::get("/admin/voitures",[AdminController::class , "all_voitures"]);
    Route::get("/admin/ajouter_voiture",[AdminController::class , "ajouter_voiture"]);
    Route::post('/admin/store_voiture',[AdminController::class , "store_voiture"]);
    Route::get("/admin/edit_voiture/{id}", [AdminController::class , "edit_voiture"]); // hadi dialk
    Route::put("/admin/update_voiture/{id}", [AdminController::class , "update_voiture"]); // hadi dialk
    Route::delete("/admin/delete_voiture", [AdminController::class , "delete_voiture"]); // hadi dialk

    Route::get("/admin/ajouter_images/{id}",[AdminController::class , "ajouter_images"]);
    Route::post("/admin/store_images/{id}",[AdminController::class ,"store_images"]);
    Route::delete("/admin/delete_images/{id}",[AdminController::class,"delete_images"]);


    Route::get("/admin/marques",[AdminController::class , "all_marques"]);
    Route::get("/admin/ajouter_marque",[AdminController::class , "ajouter_marque"]);
    Route::post("/admin/store_marque",[AdminController::class , "store_marque"]);
    Route::get("/admin/edit_marque/{id}",[AdminController::class , "edit_marque"]);
    Route::put("/admin/update_marque/{id}",[AdminController::class , "update_marque"]);
    Route::delete("/admin/delete_marque/{id}" , [AdminController::class , "delete_marque"]); // hadi dialk

    Route::get("/admin/annonce",[AdminController::class ,"annoncer"]);
    Route::post("/admin/store_annonce",[AdminController::class , "envoyer"]);

});


// KHAY HAMZA HNA ATDIR KHDMTK DAKCHI SAHL SHLT 3LIK L 9ADIYA
// SUPPRIMMER MARQUE
// SUPPRIMMER VOITURE
//MODIFIER VOITURE
// LES ROUTE W L VUES RA DEJA WAJDIN ST3MLHOM SF BON COURAGE :)



