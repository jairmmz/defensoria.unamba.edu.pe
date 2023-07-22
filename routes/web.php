<?php

use App\Http\Controllers\AttentionFormController;
use App\Http\Controllers\AuthoritieController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GeneralSettingController;
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
    
    // ------------ Dashboard ----------------
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // ------------ Noticias ----------------
    Route::prefix('admin')->group(function () {
        Route::get('/noticias', [NewsController::class, 'index'])->name('news');
        Route::get('/noticias/añadir', [NewsController::class, 'create'])->name('news.add');
        Route::post('/noticias/guardar', [NewsController::class, 'store'])->name('news.save');
        Route::get('/noticias/editar/{new}', [NewsController::class, 'edit'])->name('news.edit');
        Route::patch('/noticias/actualizar/{new}', [NewsController::class, 'update'])->name('news.update');
        Route::delete('/noticias/eliminar/{new}', [NewsController::class, 'destroy'])->name('news.destroy');
    });
    
    // ------------ Reglamentos ----------------
    Route::prefix('admin')->group(function () {
        Route::get('/reglamentos', [RegulationController::class, 'index'])->name('regulations');
        Route::get('/reglamentos/añadir', [RegulationController::class, 'create'])->name('regulations.add');
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
        Route::get('/usuarios/añadir', [UserController::class, 'create'])->name('users.add');
        Route::post('/usuarios/guardar', [UserController::class, 'store'])->name('users.save');
        Route::get('/usuarios/editar/{user}', [UserController::class, 'edit'])->name('users.edit');
        Route::patch('/usuarios/actualizar/{user}', [UserController::class, 'update'])->name('users.update');
        Route::delete('/usuarios/eliminar/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    });

    // ------------ Formulario de atención de casos ----------------
    Route::prefix('admin')->group(function () {
        Route::get('/formulario-atencion', [AttentionFormController::class, 'index'])->name('attention-form-view');
        Route::get('/formulario-atencion/ver/{attention-form}', [AttentionFormController::class, 'show'])->name('attention-form.show');
        Route::get('/formulario-atencion/generar-pdf/{attention-form}', [AttentionFormController::class, 'generatePDF'])->name('attention-form.generatePDF');
        Route::get('/formulario-atencion/generar-excel/{attention-form}', [AttentionFormController::class, 'generateExcel'])->name('attention-form.generateExcel');
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

// ------------ Página principal - index ----------------
Route::get('/', function () {
    return view('frontend.pages.index');
})->name('index');

// ------------ Página de noticias ----------------
Route::get('/noticias', function () {
    return view('frontend.pages.news.index-news');
})->name('frontend.news');

Route::get('/noticias/detalle', function () {
    return view('frontend.pages.news.new-detail');
})->name('frontend.news.detail');

// ------------ Página de servicios ----------------
Route::get('/servicios', function () {
    return view('frontend.pages.services.index-services');
})->name('frontend.services');

// ------------ Página de procedimientos ----------------
Route::get('/procedimientos', function () {
    return view('frontend.pages.procedures.index-procedures');
})->name('frontend.procedures');

// ------------ Página de documentos ----------------
Route::get('/documentos', function () {
    return view('frontend.pages.documents.index-documents');
})->name('frontend.documents');

// ------------ Página de formulario de atención----------------
Route::get('/formulario-atencion', function () {
    return view('frontend.pages.attention-form');
})->name('frontend.attention-form');

Route::post('/formulario-atencion/guardar', [AttentionFormController::class, 'store'])->name('attention-form.save');


