<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\HomeController;
use App\Models\Item;

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
    return view('apps.home');
})->name('welcome');

Route::get('/profile', ProfileController::class)->name('profile');

Route::prefix('apps')->group(function () {
    Route::resource('item', ItemController::class);
});
// routes/web.php



Route::get('exportExcel', [ItemController::class, 'exportExcel'])->name('employees.exportExcel');
