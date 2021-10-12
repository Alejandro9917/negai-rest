<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\ClientController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\ComicController;
use App\Http\Controllers\TagController;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

//Ruta para el login de clientes
Route::post('client/login', [ClientController::class, 'login'])->name('client.login');
Route::post('client/logout', [ClientController::class, 'logout'])->name('client.logout');

//Rutas que retornan el controlador de Tags
Route::resource('tags', TagController::class);
Route::middleware(['auth:sanctum', 'verified'])->get('/tags/create', [TagController::class, 'create'])->name('tags/create');

//Rutas que retornan el controlador de Collections
Route::resource('collections', CollectionController::class);
Route::middleware(['auth:sanctum', 'verified'])->get('/collections/create', [CollectionController::class, 'create'])->name('collections/create');

//Rutas que retornan el controlador de Comics
Route::resource('comics', ComicController::class);
Route::middleware(['auth:sanctum', 'verified'])->get('/comics/create', [ComicController::class, 'create'])->name('comics/create');

//Rutas que retornan el controlador de clientes
Route::resource('clients', ClientController::class);
Route::middleware(['auth:sanctum', 'verified'])->get('/clients', [ClientController::class, 'index'])->name('clients.view');