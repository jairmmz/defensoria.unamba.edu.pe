<?php

use App\Http\Controllers\AuthoritieController;
use App\Http\Controllers\BeginningController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RegulationController;
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
    
    // ------------ Principios ----------------
    Route::prefix('admin')->group(function () {
        Route::get('/principios', [BeginningController::class, 'index'])->name('beginnings');
        Route::view('/principios/añadir', 'backend.pages.beginnings.add-beginning')->name('beginnings.add');
        Route::post('/principios/guardar', [BeginningController::class, 'store'])->name('beginnings.save');
        Route::get('/principios/editar/{beginning}', [BeginningController::class, 'edit'])->name('beginnings.edit');
        Route::patch('/principios/actualizar/{beginning}', [BeginningController::class, 'update'])->name('beginnings.update');
        Route::delete('/principios/eliminar/{beginning}', [BeginningController::class, 'destroy'])->name('beginnings.destroy');
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
        Route::patch('/autoridad/actualizar/{authoritie}', [AuthoritieController::class, 'update'])->name('authorities.update');
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
    // ------------ Formato de documento ----------------
    Route::get('/admin/documento-defensoria', function () {
        return view('backend.pages.format-document.index-format-document');
    })->name('document-format');

    // ------------ Ajustes generales ----------------
    Route::get('/admin/ajustes-generales', function () {
        return view('backend.pages.settings-general.index-settings-general');
    })->name('general-settings');
    
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
