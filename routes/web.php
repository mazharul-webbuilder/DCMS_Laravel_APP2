<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PDFController;



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('calculation/new', [HomeController::class, 'newCalculation'])->name('calculation.new');


Route::post('calculation/new', [HomeController::class, 'calculateNstore'])->name('calculation.new');

Route::get('manage/all', [HomeController::class, 'manageAll'])->name('manage.all');

Route::get('data/{id}/detail', [HomeController::class, 'show'])->name('data.show');
Route::get('data/{id}/edit', [HomeController::class, 'dataEdit'])->name('data.edit');
Route::post('data/{id}/update', [HomeController::class, 'dataUpdate'])->name('data.update');

Route::get('data/{id}/0', [PDFController::class, 'pdfMake'])->name('data.pdf');


