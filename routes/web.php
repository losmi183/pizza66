<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UsersController;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ActionsController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [HomepageController::class, 'index'])->name('/');
// Route::get('/', function() {
//     return 'asdasdasd';
// });

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/pizza', [ShopController::class, 'pizza'])->name('pizza');

Route::get('/drinks', [ShopController::class, 'drinks'])->name('drinks');


Route::get('/product/{slug}', [ShopController::class, 'show'])->name('product');

// Test addons
// Route::post('/addons/{product_id}', [ShopController::class, 'addons'])->name('addons');




/**
 * Cart Routes
 */
Route::get('/cart', [CartController::class, 'index'])->name('cart');
// Add product to cart
Route::post('/addToCart', [CartController::class, 'store'])->name('addToCart');
// Remove From cart
Route::delete('/removeFromCart/{rowId}', [CartController::class, 'destroy'])->name('removeFromCart');

// Cart Helpers
Route::get('/cartContent', function() {
    dd(Cart::content());
});
Route::get('/cartDestroy', function() {
    Cart::destroy();
});
Route::get('/cartAdd', function() {
    Cart::add('293ad', 'Product 1', 1, 9.99, 550);
});


// Checkout Routes
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout');

Route::get('/thankyou', function() {
    return view('thankyou');
})->name('thankyou');


/**
 * 
 * ADMIN
 * 
 */

 Route::group(['prefix' => 'admin'], function() {

    Route::get('/', [DashboardController::class, 'index'])->name('admin');

    Route::get('orders', [OrdersController::class, 'index']);

    Route::get('orders/{id}', [OrdersController::class, 'show']);
    
    Route::post('/orders/status/{order}', [OrdersController::class, 'changeStatus']);
    
    // Users
    Route::get('/users', [UsersController::class, 'index']);
    
    Route::post('/users/changeRole/{user}', [UsersController::class, 'changeRole']);
    
    // Actions
    Route::get('/actions', [ActionsController::class, 'index'])->name('actions');

    Route::get('/actions/create', [ActionsController::class, 'create']);
    Route::post('/actions', [ActionsController::class, 'store']);
    
    Route::post('/actions/changeStatus/{action}', [ActionsController::class, 'changeStatus']);

    Route::delete('/actions/{action}', [ActionsController::class, 'destroy']);




 });


