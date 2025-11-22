<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AtividadesController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/login', [PageController::class, 'login'])->name('login');

Route::get('/index', [AtividadesController::class, 'index'])->name('atividades.index');

Route::get('/respiracao', [AtividadesController::class, 'respiracao'])->name('atividades.respiracao');

Route::get('/meditacao', [AtividadesController::class, 'meditacao'])->name('atividades.meditacao');

Route::get('/alongamento', [AtividadesController::class, 'alongamento'])->name('atividades.alongamento');

Route::get('/sons-calmantes', [AtividadesController::class, 'sonsCalmantes'])->name('atividades.sons-calmantes');

