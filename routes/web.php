<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\UserController;


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
    return view('index');
});


Route::get('/login', [UserController::class, 'getlogin'])->name('login');
Route::get('/sign-up', [UserController::class, 'getsignup'])->name('sign-up');
Route::get('/about', [UserController::class, 'getabout'])->name('about');

Route::prefix('admin')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AuthController::class, 'login'])->name('admin.login.submit');
    Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');

    Route::middleware('auth:admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/change-password', [AdminController::class, 'changepassword'])->name('admin.changepassword');
        Route::post('/change-password', [AdminController::class, 'updatePassword'])->name('admin.updatePassword');
        Route::get('/clientlist', [AdminController::class, 'clientlist'])->name('admin.clientlist');
        // Route::get('/add-client', [AdminController::class, 'create_client'])->name('admin.add_client');
        Route::get('/add-client/{id?}', [AdminController::class, 'create_client'])->name('admin.add_client');
        Route::post('/store-client', [AdminController::class, 'storeclient'])->name('admin.storeclient');
        Route::put('/update-client/{id}', [AdminController::class, 'updateClient'])->name('admin.updateclient');
        Route::delete('/delete-client/{id}', [AdminController::class, 'deleteClient'])->name('admin.deleteclient');
        Route::get('/add-user', [AdminController::class, 'createUser'])->name('admin.add_user');
        Route::post('/store-user', [AdminController::class, 'storeUser'])->name('admin.store_user');

        Route::get('/user-list', [AdminController::class, 'userlist'])->name('admin.userlist');
    });
});
