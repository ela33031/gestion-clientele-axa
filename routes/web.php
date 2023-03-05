<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DropdownController;
use App\Http\Controllers\AddSouscripteurController;
use App\Http\Controllers\ConducteurController;
use App\Http\Controllers\VehiculeController;
use App\Http\Controllers\AddVehicule;
use App\Http\Controllers\Addcontrat;
use App\Http\Controllers\contratController;
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



Route::get('/successeditvehicule', function () {
    return view('layout.successeditvehicule');
});
Route::get('/listervehicule', function () {
    return view('layout.listervehicule');
});

 Route::get('/conducteur', function () {
    return view('layout.conducteur'); 
});

Route::get('/addvehicule', function () {
    return view('layout.addvehicule');
});

Route::get('/addcontrat', function () {
    return view('layout.addcontrat');
});
Route::get('/contrat', function () {
    return view('layout.contrat');
});
Route::get('/vehicule', [VehiculeController::class,'load']);
Route::post('/vehicule', [VehiculeController::class,'DataInsert']);



Route::get('/vehicule', [DropdownController::class, 'index']);
Route::post('api/fetch-modules', [DropdownController::class, 'fetchmodule']);


Route::get('/add', [AddSouscripteurController::class,'add']);
Route::post('dataInsert', [AddSouscripteurController::class,'DataInsert']);



Route::get('/conducteur', [ConducteurController::class,'conducteur']);
Route::post('dataInsert1', [ConducteurController::class,'DataInsert']);

Route::get('/contrat', [contratController::class,'contrat']);
Route::post('dataInsert3', [contratController::class,'DataInsert']);

Route::post('dataInsert2', [VehiculeController::class,'DataInsert']);


Route::get('/addvehicule',[AddVehicule::class,'show']);
Route::get('/addcontrat',[Addcontrat::class,'show']);
// new code
Route::get('souscripteur/{id}/vehicule', [DropdownController::class, 'index']);
Route::get('vehicule/{id}/editer', [VehiculeController::class, 'load']);
Route::get('souscripteur/{id}/contrat', [Addcontrat::class, 'index']);


Route::get('/listervehicule', [VehiculeController::class, 'show']);
Route::get('editer/{id}', [VehiculeController::class, 'show']);
Route::get('editer/{id}', [VehiculeController::class, 'edit']);

Route::post('/update/{id}', [VehiculeController::class,'update']);

Route::get('/listercontrat', [contratController::class, 'show']);
Route::get('editercontrat/{id}', [contratController::class, 'show']);
Route::get('editercontrat/{id}', [contratController::class, 'edit']);

Route::post('/update1/{id}', [contratController::class,'update']);

Route::get('/login', \Auth0\Laravel\Http\Controller\Stateful\Login::class);
Route::get('/logout', \Auth0\Laravel\Http\Controller\Stateful\Logout::class);
Route::get('/auth0/callback', \Auth0\Laravel\Http\Controller\Stateful\Callback::class);


Route::get('/', function () {
     
        return view('layout.acceuil');
   

  
});//->middleware(['auth0.authenticate.optional']);


Route::get('/required', function () {
    return view('layout.acceuil');
})->middleware(['auth0.authenticate']);


