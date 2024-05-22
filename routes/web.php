<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;

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

Route::get('/', [ProductController::class, 'index'])->name('index');
Route::get('/home', [ProductController::class, 'index'])->name('index');
Route::get('/shop', [ProductController::class, 'shop'])->name('shop');
Route::get('/about', [ProductController::class, 'about'])->name('about');
Route::get('/features', [ProductController::class, 'features'])->name('features');
Route::get('/contact', [ProductController::class, 'contact'])->name('contact');
Route::get('/blog', [ProductController::class, 'blog'])->name('blog');
Route::get('/blog.details', [ProductController::class, 'showDetails'])->name('details');

Route::prefix('admin')->group(
    function ()
    {
        Route::get('login',  [AdminAuthController::class, 'index'])->name('admin.login.index');
        Route::post('login',  [AdminAuthController::class, 'login'])->name('admin.login.submit');
        Route::post('logout',  [AdminAuthController::class, 'logout'])->name('admin.logout');


        Route::get('/dashboard',  [DashboardController::class, 'index'])->name('admin.dashboard.index');
        Route::get('/products',  [AdminProductController::class, 'index'])->name('admin.product.index');
        Route::get('/products/create',  [AdminProductController::class, 'create'])->name('admin.product.create');
        Route::get('/products/store',  [AdminProductController::class, 'store'])->name('admin.product.store');
    }
);
