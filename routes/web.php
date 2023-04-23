<?php

use App\Http\Controllers\PostController;
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
Route::delete('posts/forcedelete/{id}', [PostController::class, 'DeleteDefinitely'])->name('posts.DeleteDefinitely');
Route::get('posts/restore/{id}', [PostController::class, 'restoreData'])->name('posts.restoreData');
Route::get('posts/softdelete', [PostController::class, 'softDelete'])->name('posts.softDelete');
Route::resource('posts', PostController::class);
