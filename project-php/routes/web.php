<?php

//importamos el controller de persona
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AuthenticatedSessionController; 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PonenteController;

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

/*Route::get('/', function () {

    return view('index');
});*/

Route::view('/login', 'login') ->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login');
Route::get('/registro', [UsuarioController::class, 'create']) ->name('usuario.create');
Route::post('/registro', [UsuarioController::class, 'store']) ->name('usuario.create');

Route::get('/profile', [UsuarioController::class, 'edit']) ->name('usuario.update');
Route::post('/profile', [UsuarioController::class, 'update'])->name('usuario.update');

//si recibe datos
//Route::get('/', [PersonaController::class ,'index'])->name('index');

Route::view('/', 'auth')->name('autenticado')->middleware('auth');
Route::view('/usuario', 'usuario')->name('usuairo')->middleware('auth');
// Route::view('/ponente', 'ponente')->name('ponente')->middleware('auth');


Route::get('/ponente', [PonenteController::class, 'index'])->middleware('ValidateRequest');
Route::post('/hanldeButton', [PonenteController::class, 'hanldeButton'])->middleware('ValidateRequest');
Route::post('/event_detail', [PonenteController::class, 'event_detail'])->middleware('ValidateRequest');
Route::post('/removeSpeaker', [PonenteController::class, 'removeSpeaker'])->middleware('ValidateRequest');
Route::get('/user-profile', [PonenteController::class, 'profile'])->middleware('ValidateRequest');
Route::post('/update_profile', [PonenteController::class, 'update_profile'])->middleware('ValidateRequest');


Route::get('/logout', [AuthenticatedSessionController::class,"logout"]);

//si no recibe datos
Route::get('/welcome', function () {
    return 'welcome';
});
