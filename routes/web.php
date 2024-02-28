<?php
 
 use App\Http\Controllers\AdminController; 
 use App\Http\Controllers\DashboardController;
 use App\Http\Controllers\HomeController;
 use App\Http\Controllers\LoginController; 
 use App\Http\Controllers\PermissionController;
 use App\Http\Controllers\RegisterController;
 use App\Http\Controllers\RoleController; 
 use App\Http\Controllers\Auth\ForgotPasswordController; 
 use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SellerController;
use Illuminate\Support\Facades\Auth;
 use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Routes
|--------------------------------------------------------------------------
*/ 


Route::get('/login', function () {
    return view('admin.login'); 
})->name('admin.login');


Auth::routes();


//admin routes
Route::middleware(['guest'])->group(function () {
    // Route::middleware(['guest', 'throttle:60,1'])->group(function () {

    Route::get('/login', [LoginController::class, 'login'])->name('admin.login');
    Route::post('/login', [LoginController::class, 'verification'])->name('auth.verification');

    Route::get('/seller/login', [SellerController::class, 'login'])->name('seller.login');
    Route::post('/seller/login', [SellerController::class, 'verification'])->name('seller.verification');


    Route::get('/seller/register', [SellerController::class, 'register'])->name('seller.register');
    Route::post('/seller/register', [SellerController::class, 'create'])->name('seller.create');

    Route::get('/register', [RegisterController::class, 'register'])->name('admin.register');
    Route::post('/register', [RegisterController::class, 'create'])->name('admin.create');

    // Forgot Password Routes
    Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('admin.password.request');
    Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('admin.password.email');

    // Password Reset Routes
    Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('admin.password.reset');
    Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('admin.password.update');
});

//frontend
 
Route::get('/', function () {
    return view('frontend.seller.login'); 
});

Route::get('/seller/signup', function () {
    return view('frontend.seller.register'); 
});

Route::get('/seller/dashboard', function () {
    return view('frontend.seller.dashboard'); 
});
 

// admin routes 
Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/seller/dashboard', [SellerController::class, 'dashboard'])->name('seller.dashboard');
    Route::get('/users', [HomeController::class, 'userlist'])->name('admin.users.list');
    Route::post('/logout', [LoginController::class, 'logout'])->name('admin.logout');

    // Permissions
    Route::get('permissions', [PermissionController::class, 'index'])->name('permissions.index');
    Route::post('permissions', [PermissionController::class, 'store'])->name('permissions.store');
    Route::get('permissions/{id}/edit', [PermissionController::class, 'edit'])->name('permissions.edit');
    Route::put('permissions/{id}', [PermissionController::class, 'update'])->name('permissions.update');
    Route::delete('permissions/{id}', [PermissionController::class, 'destroy'])->name('permissions.destroy');

    // roles
    Route::get('roles', [RoleController::class, 'index'])->name('roles.index');
    Route::post('roles', [RoleController::class, 'store'])->name('roles.store');
    Route::get('roles/{id}/edit', [RoleController::class, 'edit'])->name('roles.edit');
    Route::put('roles/{id}', [RoleController::class, 'update'])->name('roles.update');
    Route::delete('roles/{id}', [RoleController::class, 'destroy'])->name('roles.destroy');

    // users
    Route::get('users', [AdminController::class, 'index'])->name('users.index');
    Route::get('users/create', [AdminController::class, 'create'])->name('users.create');
    Route::post('users', [AdminController::class, 'store'])->name('users.store');
    Route::get('users/{id}/edit', [AdminController::class, 'edit'])->name('users.edit');
    Route::put('users/{id}', [AdminController::class, 'update'])->name('users.update');
    Route::delete('users/{id}', [AdminController::class, 'destroy'])->name('users.destroy'); 
    
    // doctors create 
    // Route::get('doctors/create', [DoctorsController::class, 'create'])->name('doctors.create');
    // Route::post('doctors', [DoctorsController::class, 'store'])->name('doctors.store');
    // Route::get('doctors', [DoctorsController::class, 'index'])->name('doctors.index');
 
     // categories
     Route::get('categories', [CategoryController::class, 'index'])->name('categories.index'); 
     Route::post('categories', [CategoryController::class, 'store'])->name('categories.store');
     Route::get('categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
     Route::put('categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
     Route::delete('categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy'); 

});


