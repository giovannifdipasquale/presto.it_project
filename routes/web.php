<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

//Rotte Articoli
Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create')->middleware('auth');

Route::get('/articles/index', [ArticleController::class, 'index'])->name('articles.index');

Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('articles.show');

//Rotta categorie
Route::get('categories/{category}', [CategoryController::class, 'byCategory'])->name('categories.byCategory');

//Rotta per utente revisore
Route::get('revisor/index', [RevisorController::class, 'index'])->name('revisor.index')->middleware('is_revisor');

//Rotta revisione articolo
Route::patch('accept/{article}', [RevisorController::class, 'accept'])->name('accept');
Route::patch('reject/{article}', [RevisorController::class, 'reject'])->name('reject');
Route::patch('revert/', [RevisorController::class, 'revert'])->name('revert');

//Rotta Mail per accettazione Revisore
Route::get('revisor/request', [RevisorController::class, 'becomeRevisor'])->name('mail.become-revisor');
Route::get('make/revisor/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');

//Rotta ricerca articoli
Route::get('/search/articles', [PublicController::class, 'searchArticles'])->name('articles.search');

//Rotta componente _locale (cambio lingue)
Route::post('/lingua/{lang}', [PublicController::class, 'setLanguage'])->name('setLocale');