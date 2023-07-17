<?php

use App\Http\Controllers\AuthoritieController;
use App\Http\Controllers\GeneralSettingController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RegulationController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes Backend
|--------------------------------------------------------------------------
*/
Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.perform');


Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.perform');

Route::redirect('/admin', '/dashboard', 301);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', function () {
        return view('backend.index');
    })->name('dashboard');

    // ------------ Noticias ----------------
    Route::prefix('admin')->group(function () {
        Route::get('/noticias', [NewsController::class, 'index'])->name('news');
        Route::view('/noticias/añadir', 'backend.pages.news.add-new')->name('news.add');
        Route::post('/noticias/guardar', [NewsController::class, 'store'])->name('news.save');
        Route::get('/noticias/editar/{new}', [NewsController::class, 'edit'])->name('news.edit');
        Route::patch('/noticias/actualizar/{new}', [NewsController::class, 'update'])->name('news.update');
        Route::delete('/noticias/eliminar/{new}', [NewsController::class, 'destroy'])->name('news.destroy');
    });
    
    // ------------ Reglamentos ----------------
    Route::prefix('admin')->group(function () {
        Route::get('/reglamentos', [RegulationController::class, 'index'])->name('regulations');
        Route::view('/reglamentos/añadir', 'backend.pages.regulations.add-regulation')->name('regulations.add');
        Route::post('/reglamentos/guardar', [RegulationController::class, 'store'])->name('regulations.save');
        Route::get('/reglamentos/editar/{regulation}', [RegulationController::class, 'edit'])->name('regulations.edit');
        Route::patch('/reglamentos/actualizar/{regulation}', [RegulationController::class, 'update'])->name('regulations.update');
        Route::delete('/reglamentos/eliminar/{regulation}', [RegulationController::class, 'destroy'])->name('regulations.destroy');
    });
    
    // ------------ Autoridades ----------------
    Route::prefix('admin')->group(function () {
        Route::get('/autoridad', [AuthoritieController::class, 'index'])->name('authorities');
        Route::patch('/autoridad/actualizar', [AuthoritieController::class, 'update'])->name('authorities.update');
    });

    // ------------ Usuarios ----------------
    Route::prefix('admin')->group(function () {
        Route::get('/usuarios', [UserController::class, 'index'])->name('users');
        Route::view('/usuarios/añadir', 'backend.pages.users.add-user')->name('users.add');
        Route::post('/usuarios/guardar', [UserController::class, 'store'])->name('users.save');
        Route::get('/usuarios/editar/{user}', [UserController::class, 'edit'])->name('users.edit');
        Route::patch('/usuarios/actualizar/{user}', [UserController::class, 'update'])->name('users.update');
        Route::delete('/usuarios/eliminar/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    });

    // ------------ Encuestas ----------------
    Route::prefix('admin')->group(function () {
        Route::get('/encuestas', [SurveyController::class, 'index'])->name('surveys');
        Route::view('/encuestas/añadir', 'backend.pages.surveys.add-survey')->name('surveys.add');
        Route::post('/encuestas/guardar', [SurveyController::class, 'store'])->name('surveys.save');
        Route::get('/encuestas/editar/{survey}', [SurveyController::class, 'edit'])->name('surveys.edit');
        Route::patch('/encuestas/actualizar/{survey}', [SurveyController::class, 'update'])->name('surveys.update');
        Route::delete('/encuestas/eliminar/{survey}', [SurveyController::class, 'destroy'])->name('surveys.destroy');
    });

    // ------------ Ajustes generales ----------------
    Route::prefix('admin')->group(function () {
        Route::get('/ajustes-generales', [GeneralSettingController::class, 'index'])->name('settings');
        Route::patch('/ajustes-generales/actualizar', [GeneralSettingController::class, 'update'])->name('settings.update');
    });

    
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
    
});

/*
|--------------------------------------------------------------------------
| Web Routes Frontend
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('frontend.pages.index');
})->name('index');
