<?php

use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/companies', [CompanyController::class, 'index'])->name('company.index');
Route::get('/companies/create', [CompanyController::class, 'create'])->name('company.create')->middleware('auth');
Route::post('/companies', [CompanyController::class, 'store'])->name('company.store');
Route::get('/companies/{id}', [CompanyController::class, 'show'])->name('company.show');
Route::get('/companies/{id}/edit', [CompanyController::class, 'edit'])->name('company.edit')->middleware('auth');
Route::post('/companies/{id}', [CompanyController::class, 'update'])->name('company.update')->middleware('auth');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
