<?php

use App\Http\Controllers\AssociationController;
use App\Http\Controllers\MinistryController;
use App\Http\Controllers\ProfileController;
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

Route::get('/settings', function () {
    return view('settings');
})->name('settings');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('users', ProfileController::class);

Route::resource('ministries', MinistryController::class);

Route::resource('companies', CompanyController::class);

Route::resource('associations', AssociationController::class);

Route::resource('personells', PersonellController::class);

Route::resource('workplaces', WorkplaceController::class);

Route::get('/organizations/create', function () {
    return view('organizations.create');
})->name('organizations.create');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::delete('users', [ProfileController::class, 'destroy']);
});

require __DIR__.'/auth.php';
