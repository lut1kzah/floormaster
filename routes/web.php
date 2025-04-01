<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\PartnerController;

// Маршруты для партнеров (PartnerController)
Route::get('/partners', [PartnerController::class, 'index'])->name('partners.index'); // Список партнеров
Route::get('/partners/create', [PartnerController::class, 'create'])->name('partners.create'); // Форма создания
Route::post('/partners/create', [PartnerController::class, 'store'])->name('partners.store'); // Сохранение нового
Route::get('/partners/edit/{partner}', [PartnerController::class, 'edit'])->name('partners.edit'); // Форма редактирования
Route::post('/partners/edit/{partner}', [PartnerController::class, 'update'])->name('partners.update'); // Редактирования




