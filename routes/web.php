<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;

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

Route::controller(AdminController::class)->group(function () {
    Route::get('/admin', 'indexAction')->name('dashboard');
    Route::get('/admin/tables/users', 'tablesUsersAction')->name('tablesUsers');
    Route::get('/admin/tables/usertasks', 'tablesTasksAction')->name('tablesTasks');
});

// Route::get('/', [IndexController::class, 'homeAction']);
Route::controller(IndexController::class)->middleware(['auth'])->group(function () {
    // Route::get('/login', 'loginAction'); 
    Route::get('/', 'homeAction'); 
    Route::get('/time_traker', 'timeTrakerAction');
    Route::get('/add_time', 'addTimeAction');
});

// Route::get('/', function () {
//     return view('pages.admin.home');
// })->middleware(['auth'])->name('pages.home'); 

require __DIR__.'/auth.php'; 

