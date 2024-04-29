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

//Authentification
Route::get("/login",[ClientController::class,"login"]);
Route::post("/verifier",[ClientController::class , "verifier"])->middleware("check");

// Création de Compte
Route::get("/create",[ClientController::class,"createAccount"]);
Route::post("/store",[ClientController::class,"store"]);

// Log Out
Route::post("/deconnect",[ClientController::class , "deconnect"]);

//Hadchi Dial Admins

Route::get("/admin",[AdminController::class,"index"]);
Route::get("/admin/voitures",[AdminController::class , "all_voitures"]);
Route::get("/admin/ajouter_voiture",[AdminController::class , "ajouter_voiture"]);

Route::get("/admin/marques",[AdminController::class , "all_marques"]);
Route::get("/admin/ajouter_marque",[AdminController::class , "ajouter_marque"]);



