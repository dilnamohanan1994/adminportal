<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomFieldController;
use App\Http\Controllers\ModuleApiController;
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

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('admin.auth')->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::resource('admin/custom-fields', CustomFieldController::class);
    Route::get('admin/modules/{module}', [ModuleApiController::class, 'showModuleList']);
    Route::get('admin/modules/{module}/create', [ModuleApiController::class, 'showModuleCreate']);
});