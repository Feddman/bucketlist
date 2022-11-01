<?php

use Illuminate\Support\Facades\Route;
use \App\Models\Item;
use \App\Http\Controllers\ItemsController;
use \App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class, 'home']);

Route::get('/dashboard', [PagesController::class, 'dashboard'])
->middleware(['auth'])
->name('dashboard');

Route::resource('items', ItemsController::class);
Route::put('items/{item}/markDone', [ItemsController::class, 'markDone'])->name('items.markDone');

require __DIR__.'/auth.php';

