<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Client\ClientAuthController;
use App\Http\Controllers\Client\ClientController;
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

Route::get('/', [UserController::class, 'index'])->name('index');
Route::get('/login', [UserController::class, 'getlogin'])->name('login');
Route::get('/sign-up', [UserController::class, 'getsignup'])->name('sign-up');
Route::get('/dashboard', [UserController::class, 'getDashboard'])->name('dashboard');
Route::post('/store-sign-up', [UserController::class, 'storeSignup'])->name('store.sign-up');
Route::get('/email/confirmation/{token}', [UserController::class, 'confirmEmail'])->name('email.confirmation');
Route::get('/about', [UserController::class, 'getabout'])->name('about');
Route::get('/contact', [UserController::class, 'getcontact'])->name('contact');
Route::post('/store-contact', [UserController::class, 'storeContact'])->name('store.contact');

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

Route::prefix('client')->group(function () {
    Route::get('/login', [ClientAuthController::class, 'showClientLoginForm'])->name('client.login');
    Route::post('/login', [ClientAuthController::class, 'clientLogin'])->name('client.login.submit');
    Route::post('/logout', [ClientAuthController::class, 'clientLogout'])->name('client.logout');

    Route::middleware('auth:client')->group(function () {
        Route::get('/dashboard', [ClientController::class, 'clientDashboard'])->name('client.dashboard');
        Route::get('/change-password', [ClientController::class, 'changepassword'])->name('client.changepassword');
        Route::post('/change-password', [ClientController::class, 'updatePassword'])->name('client.updatePassword');
        Route::get('/add-user', [ClientController::class, 'createUser'])->name('client.add_user');
        Route::post('/store-user', [ClientController::class, 'storeUser'])->name('client.store_user');
        Route::get('/user-list', [ClientController::class, 'userlist'])->name('client.userlist');
    });
});
