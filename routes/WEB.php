<?php

use App\Http\Controllers\AdministrationController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\DateController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PresentationController;
use App\Http\Controllers\ProgrammeController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Routes pour la section 'program'
Route::prefix('program')->group(function () {
    Route::get('/', [ProgrammeController::class, 'index'])->name('program.index');
    Route::get('/guidelines', [ProgrammeController::class, 'guidelines'])->name('program.guidelines');
    Route::get('/call-for-papers', [ProgrammeController::class, 'call_for_papers'])->name('program.call-for-papers');
    Route::get('/registration', [ProgrammeController::class, 'registration'])->name('program.registration');
    Route::post('/registration', [ProgrammeController::class, 'storeAuthor'])->name('program.registration.store');
});

// Routes pour la section 'dates'
Route::prefix('dates')->group(function () {
    Route::get('/', [DateController::class, 'index'])->name('date.index');
});

// Routes pour la section 'presentation'
Route::prefix('presentation')->group(function () {
    Route::get('/', [PresentationController::class, 'keynotes'])->name('presentation.keynotes');
    // ... (ajoutez d'autres routes pour les différentes présentations)
});

// Routes pour la section 'inscription'
Route::prefix('inscription')->group(function () {
    Route::get('/', [InscriptionController::class, 'index'])->name('inscription.index');
    Route::post('/inscription', [InscriptionController::class, 'store'])->name('inscription.store');
});

// Routes pour la section 'faq'
Route::prefix('faq')->group(function () {
    Route::get('/', [FaqController::class, 'index'])->name('faq.index');
});

// Routes pour la section 'blog'
Route::prefix('blog')->group(function () {
    Route::get('/', [BlogPostController::class, 'index'])->name('blog.index');
});

// Routes pour les utilisateurs authentifiés
Route::middleware('auth')->group(function () {
    // Routes pour la section 'admins'
    Route::prefix('admins')->group(function () {
        Route::get('/', [AdministrationController::class, 'index'])->name('admin.index');
        // ... (ajoutez d'autres routes pour les différentes sections de l'administration)
    });
});

// Route par défaut pour la page d'accueil
Route::get('/accueil', [HomeController::class, 'index'])->name('accueil');

// Authentification
Auth::routes();

// Route par défaut pour la page d'accueil après l'authentification
Route::get('/home', [HomeController::class, 'index'])->name('home');

