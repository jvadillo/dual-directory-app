<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UserController;
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
Route::get('/companies/create', [CompanyController::class, 'create'])->name('company.create')->can('create-company');
Route::post('/companies', [CompanyController::class, 'store'])->name('company.store');
Route::get('/companies/{id}', [CompanyController::class, 'show'])->name('company.show');
Route::get('/companies/{id}/edit', [CompanyController::class, 'edit'])->name('company.edit')->middleware('auth');
Route::post('/companies/{id}', [CompanyController::class, 'update'])->name('company.update')->middleware('auth');

Route::resource('users', UserController::class)->middleware(['auth']);

Route::get('/', function () {
    return view('landing.index');
})->name('landing.index');

require __DIR__.'/auth.php';
