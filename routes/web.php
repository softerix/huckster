<?php

use App\Http\Controllers\DashboardController;
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

Route::get('/contracts', [DashboardController::class, 'contracts'])->middleware(['auth'])->name('contracts');
Route::get('/inventory', [DashboardController::class, 'inventory'])->middleware(['auth'])->name('inventory');
Route::get('/', [DashboardController::class, 'network'])->middleware(['auth'])->name('network');

require __DIR__.'/auth.php';
