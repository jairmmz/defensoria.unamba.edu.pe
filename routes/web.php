<?php

use App\Http\Controllers\AttentionFormController;
use App\Http\Controllers\AuthoritieController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GeneralSettingController;
use App\Http\Controllers\IndexPageController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProcedureController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RegulationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes Backend
|--------------------------------------------------------------------------*/

// Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
// Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.perform');


Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.perform');

Route::redirect('/admin', '/dashboard', 301);


// ------------ Dashboard ----------------
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::prefix('admin')->middleware('auth')->group(function () {
    // ------------ Noticias ----------------
    Route::get('/noticias', [NewsController::class, 'index'])->name('news');
    Route::get('/noticias/añadir', [NewsController::class, 'create'])->name('news.add');
    Route::post('/noticias/guardar', [NewsController::class, 'store'])->name('news.save');
    Route::get('/noticias/editar/{new}', [NewsController::class, 'edit'])->name('news.edit');
    Route::patch('/noticias/actualizar/{new}', [NewsController::class, 'update'])->name('news.update');
    Route::delete('/noticias/eliminar/{new}', [NewsController::class, 'destroy'])->name('news.destroy');

    // ------------ Reglamentos ----------------
    Route::get('/reglamentos', [RegulationController::class, 'index'])->name('regulations');
    Route::get('/reglamentos/añadir', [RegulationController::class, 'create'])->name('regulations.add');
    Route::post('/reglamentos/guardar', [RegulationController::class, 'store'])->name('regulations.save');
    Route::get('/reglamentos/editar/{regulation}', [RegulationController::class, 'edit'])->name('regulations.edit');
    Route::patch('/reglamentos/actualizar/{regulation}', [RegulationController::class, 'update'])->name('regulations.update');
    Route::delete('/reglamentos/eliminar/{regulation}', [RegulationController::class, 'destroy'])->name('regulations.destroy');

    // ------------ Autoridades ----------------
    Route::get('/autoridad', [AuthoritieController::class, 'index'])->name('authorities');
    Route::patch('/autoridad/actualizar', [AuthoritieController::class, 'update'])->name('authorities.update');

    // ------------ Usuarios ----------------
    Route::get('/usuarios', [UserController::class, 'index'])->name('users')->middleware('superadmin');
    Route::get('/usuarios/añadir', [UserController::class, 'create'])->name('users.add')->middleware('superadmin');
    Route::post('/usuarios/guardar', [UserController::class, 'store'])->name('users.save')->middleware('superadmin');
    Route::get('/usuarios/editar/{user}', [UserController::class, 'edit'])->name('users.edit')->middleware('superadmin');
    Route::patch('/usuarios/actualizar/{user}', [UserController::class, 'update'])->name('users.update')->middleware('superadmin');
    Route::delete('/usuarios/eliminar/{user}', [UserController::class, 'destroy'])->name('users.destroy')->middleware('superadmin');

    // ------------ Formulario de atención de casos ----------------
    Route::get('/formulario-atencion', [AttentionFormController::class, 'index'])->name('attention-form-index')->middleware('superadmin');
    Route::get('/formulario-atencion/ver/{attentionForm}', [AttentionFormController::class, 'show'])->name('attention-form.show')->middleware('superadmin');
    Route::patch('/formulario-atencion/actualizar/{attentionForm}', [AttentionFormController::class, 'update'])->name('attention-form.update')->middleware('superadmin');
    Route::get('/formulario-atencion/generar-pdf/{attentionForm}', [AttentionFormController::class, 'generatePDF'])->name('attention-form.generatePDF')->middleware('superadmin');
    Route::get('/formulario-atencion/generar-excel/{attentionForm}', [AttentionFormController::class, 'generateExcel'])->name('attention-form.generateExcel')->middleware('superadmin');

    // ------------ Ajustes generales ----------------
    Route::get('/ajustes-generales', [GeneralSettingController::class, 'index'])->name('settings');
    Route::patch('/ajustes-generales/actualizar', [GeneralSettingController::class, 'update'])->name('settings.update');

    // ------------ Perfil de usuario ----------------
    Route::get('/perfil/{user}', [UserController::class, 'profileUser'])->name('profile.user');
    Route::patch('/perfil/actualizar/{user}', [UserController::class, 'updateProfile'])->name('profile.update');
    // 
    // ------------ Cerrar sesión ----------------
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});

/*
|--------------------------------------------------------------------------
| Web Routes Frontend
|--------------------------------------------------------------------------*/

// ------------ Página principal - index ----------------
Route::get('/', [IndexPageController::class, 'index'])->name('index');

// ------------ Página de noticias ----------------
Route::get('/noticias', [NewsController::class, 'indexFrontend'])->name('frontend.index.news');
Route::get('/noticias/detalle/{new}', [NewsController::class, 'newsDetail'])->name('frontend.news.detail');

// ------------ Página de servicios ----------------
Route::get('/servicios', [ServiceController::class, 'index'])->name('frontend.services');

// ------------ Página de procedimientos ----------------
Route::get('/procedimientos', [ProcedureController::class, 'index'])->name('frontend.procedures');

// ------------ Página de documentos ----------------
Route::get('/documentos', [RegulationController::class, 'indexFrontend'])->name('frontend.documents');

// ------------ Página de formulario de atención----------------
Route::get('/formulario-atencion', [AttentionFormController::class, 'indexFront'])->name('frontend.attention-form');
Route::post('/formulario-atencion/guardar', [AttentionFormController::class, 'store'])->name('attention-form.save');


