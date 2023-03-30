<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ChauffeurController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\DriverregisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TrajetController;
use App\Http\Controllers\VilleController;
use App\Models\Trajet;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// User Route
Route::middleware(['auth', 'user-role:user'])->group(function(){
    Route::get("/home", [HomeController::class, 'userHome'])->name('home');
});

// driver Route
Route::middleware(['auth', 'user-role:driver'])->group(function(){
    Route::get("/driver/home", [HomeController::class, 'driverHome'])->name('home.driver');
});
Route::get('/trajets/{ville}', [TrajetController::class, 'getByVille']);
Route::post('/driver/home', [HomeController::class, 'driverStore'])->name('chauffeur.store');


// User Route
Route::middleware(['auth', 'user-role:admin'])->group(function(){
    Route::get("/admin/home", [HomeController::class, 'adminHome'])->name('home.admin');
});
Route::post('/home', [HomeController::class, 'userStore'])->name('user.store');
Route::get("/home/{id}/user", [CommandeController::class, 'delete'])->name('user.delete');
Route::post('/commande/{id}/valider', [CommandeController::class, 'valider'])->name('commande.valider');

Route::get('/apropos', function (){
    return view('apropos');
});

Route::get('/passager', function (){
    return view('passager');
});

Route::get('/chauffeur', function (){
    return view('chauffeur');
});

Route::get('/driver_register', function (){
    return view('driver_register');
});
Route::post("/driver_store", [DriverregisterController::class, 'create'])->name('driver.store');

Route::get("/admin/ville", [VilleController::class, 'index'])->name('ville');
Route::post("/admin/ville", [VilleController::class, 'store'])->name('ville.store');
Route::get("/admin/{id}/ville", [VilleController::class, 'delete'])->name('ville.delete');

Route::get("/admin/trajet", [TrajetController::class, 'index'])->name('trajet');
Route::post("/admin/trajet", [TrajetController::class, 'store'])->name('trajet.store');
Route::get("/admin/{id}/trajet", [TrajetController::class, 'delete'])->name('trajet.delete');

Route::post('/chauffeurs/{id}/valider', [ChauffeurController::class, 'valider'])->name('chauffeur.valider');

Route::get("/driver/{id}/chauffeur", [ChauffeurController::class, 'delete'])->name('chauffeur.delete');