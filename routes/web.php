<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
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

Route::get('/', [ProductController::class, 'index'])->name('home');
Route::get('/home', [ProductController::class, 'index'])->name('index');
Route::get('/login', [UserController::class, 'index'])->name('login');
Route::get('/shop', [ProductController::class, 'shop'])->name('shop');
Route::get('/about', [ProductController::class, 'about'])->name('about');
// Route::get('/features', [ProductController::class, 'features'])->name('features');
Route::get('/contact', [ProductController::class, 'contact'])->name('contact');
Route::get('/blog', [ProductController::class, 'blog'])->name('blog');
Route::get('/blog.details', [ProductController::class, 'showDetails'])->name('details');
Route::post('/users/sign-up',  [UserController::class, 'store'])->name('user.store');

Route::group(
    ['middleware' => 'web.login'],
    function ()
    {
        Route::get('/user/wishliist',  [UserController::class, 'getWishlist'])->name('web.wishlist');
        Route::get('/user/cart',  [UserController::class, 'getCart'])->name('web.cart');
        Route::get('/add-to-cart/{id}',  [UserController::class, 'cartStore'])->name('cart.store');

    }
);

Route::prefix('admin')->group(
    function ()
    {
        Route::get('login',  [AdminAuthController::class, 'index'])->name('admin.login.index');
        Route::post('login',  [AdminAuthController::class, 'login'])->name('admin.login.submit');
        Route::post('logout',  [AdminAuthController::class, 'logout'])->name('admin.logout');
        Route::group(
            ['middleware' => 'admin'],
            function ()
            {
                Route::get('/dashboard',  [DashboardController::class, 'index'])->name('admin.dashboard.index');
                Route::get('/products',  [AdminProductController::class, 'index'])->name('admin.product.index');
                Route::get('/products/create',  [AdminProductController::class, 'create'])->name('admin.product.create');
                Route::post('/products/store',  [AdminProductController::class, 'store'])->name('admin.product.store');
                Route::post('/products/update',  [AdminProductController::class, 'update'])->name('admin.product.update');
                Route::get('/products/edit/{id}',  [AdminProductController::class, 'edit']);
                Route::get('/products/delete/{id}',  [AdminProductController::class, 'delete']);
            }
        );
    }
);