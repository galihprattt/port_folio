<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ResumeController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\HeroController;
use App\Http\Controllers\Admin\ContactController;

// Halaman utama (public)
Route::get('/', [HomeController::class, 'index']);

// Halaman admin
Route::prefix('admin')->name('admin.')->group(function () {

    // Home Section
    Route::get('/home', [HomeController::class, 'edit'])->name('home.edit');
    Route::post('/home', [HomeController::class, 'update'])->name('home.update');

    // About Section
    Route::get('/about', [AboutController::class, 'index'])->name('about.index');
    Route::get('/about/edit', [AboutController::class, 'edit'])->name('about.edit');
    Route::post('/about/update', [AboutController::class, 'update'])->name('about.update');

    // Resume Section
    Route::resource('resume', ResumeController::class);

    // Skill Section
    Route::resource('skill', SkillController::class);

    // Project Section
    Route::resource('project', ProjectController::class);

    // Hero Section
    Route::get('/hero', [HeroController::class, 'index'])->name('hero.index');
    Route::get('/hero/edit', [HeroController::class, 'edit'])->name('hero.edit');
    Route::post('/hero/update', [HeroController::class, 'update'])->name('hero.update');

    // Contact Section
    Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
    Route::get('/contact/edit', [ContactController::class, 'edit'])->name('contact.edit');
    Route::post('/contact/update', [ContactController::class, 'update'])->name('contact.update');
});
