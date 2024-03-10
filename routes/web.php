<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoginbygoogleController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Admin\AccountsController;
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
Route::get('/login', [LoginController::class, 'login']);
Route::post('/dangnhap', [LoginbygoogleController::class, 'dangnhap']);
// login by google
Route::get('auth/google', [LoginbygoogleController::class, 'redirectToGoogle'])->name('loginbygoogle');
Route::get('auth/google/callback', [LoginbygoogleController::class, 'handleGoogleCallback']);

/*
Route::middleware(['checklogin::class'])->group(function () {
    //load menu 
    Route::get('/sidebar', [MenuController::class, 'sidebar']);
    Route::post('logout', [LogoutController::class, 'logout'])->name('logout');
    Route::prefix('/')->group(function () {
        Route::get('/', [MenuController::class, 'loadMenu']);
        Route::get('/loadname', [MenuController::class, 'loadname']);
        Route::post('loadpage/{idmn}', [MenuController::class, 'loadpage']);
    });
    

    //
    Route::prefix('/qltk')->group(function () {
        Route::get('/', [AccountsController::class, 'index']);
        Route::get('list_accounts', [AccountsController::class, 'list_accounts']);
        Route::post('Add_accounts', [AccountsController::class, 'Add_accounts']);
        Route::post('delete_accounts/{id}', [AccountsController::class, 'delete_accounts']);
        Route::get('edit_accounts/{id}', [AccountsController::class, 'edit_accounts']);
        Route::post('update_accounts', [AccountsController::class, 'update_accounts']);
        Route::get('change_pass/{id}', [AccountsController::class, 'change_pass']);
        Route::post('update_change', [AccountsController::class, 'update_change']);
        Route::get('loadUser_Menus_Roles/{id}', [AccountsController::class, 'loadUser_Menus_Roles']);
        Route::post('capnhatquyen', [AccountsController::class, 'capnhatquyen']);
    });


});
*/
Route::middleware(['checklogin'])->group(function () {
    
    Route::get('/sidebar', [UserController::class, 'sidebar']);
    
    Route::prefix('/')->group(function () {
        Route::get('/', [UserController::class, 'index']);
        Route::get('contact', [UserController::class, 'contact']);
        Route::get('register', [UserController::class, 'register']);
        Route::get('recents', [UserController::class, 'recents']);
    });

    Route::get('logout', [LogoutController::class, 'logout'])->name('logout');
});