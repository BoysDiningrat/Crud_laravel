<?php

use App\Http\Controllers\ContohController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('contoh', [ContohController::class, 'index'])->name('contoh.index');
Route::get('contoh-create', [ContohController::class, 'create'])->name('contoh.create');
Route::post('contoh-store', [ContohController::class, 'store'])->name('contoh.store');
Route::get('contoh-edit/edit/{id}', [ContohController::class, 'edit'])->name('contoh.edit');
Route::get('contoh-show/{id}', [ContohController::class, 'show'])->name('contoh.show');
Route::post('contoh-update/{id}', [ContohController::class, 'update'])->name('contoh.update');
Route::delete('contoh-delete/{id}', [ContohController::class, 'destroy'])->name('contoh.destroy');
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
