<?php

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get("/", [\App\Http\Controllers\WelcomeController::class, "home"]);
Route::get("/login", [\App\Http\Controllers\TaskController::class, "login"]);
Route::post("/login", [\App\Http\Controllers\TaskController::class, "logening"])->name("login");

Route::post("/registered", [\App\Http\Controllers\TaskController::class, "store"]);
Route::get("/register", [\App\Http\Controllers\TaskController::class, "register"]);
Route::get("/shopping_cart", [\App\Http\Controllers\TaskController::class, "shopping_cart"]);
Route::put("/add_cart/{id}", [\App\Http\Controllers\TaskController::class, "add_cart"]);
Route::get("/Legion 5/{id}", [\App\Http\Controllers\TaskController::class, "first_product"]);
Route::get("/nitro 5/{id}", [\App\Http\Controllers\TaskController::class, "first_product"]);
Route::get("/FA706IC-HX006T/{id}", [\App\Http\Controllers\TaskController::class, "first_product"]);
Route::get("/GF63 Thin/{id}", [\App\Http\Controllers\TaskController::class, "first_product"]);
Route::get("/IdeaPad Gaming 3 15ACH6pr Shadow Black/{id}", [\App\Http\Controllers\TaskController::class, "first_product"]);
Route::get("/ROG Strix G15 G513IM-HN008W Eclipse Gray/{id}", [\App\Http\Controllers\TaskController::class, "first_product"]);

Route::post("/something", [\App\Http\Controllers\ProductController::class, "productList"])->name("products.list");
Route::post("/cart", [\App\Http\Controllers\CartController::class, "cartList"])->name("cart.list");
Route::post("/cart_store", [\App\Http\Controllers\CartController::class, "addToCart"])->name("cart_store");
Route::post("/update-cart", [\App\Http\Controllers\CartController::class, "updateCart"])->name("cart.update");
Route::post("/remove", [\App\Http\Controllers\CartController::class, "removeCart"])->name("cart.remove");
Route::post("/clear", [\App\Http\Controllers\CartController::class, "clearAllCart"])->name("cart.clear");

Route::get("/product/create", [\App\Http\Controllers\ProductController::class, "createProduct"]);
Route::post("/product/store", [\App\Http\Controllers\ProductController::class, "storeProduct"]);
Route::get("/product/{id}/show", [\App\Http\Controllers\ProductController::class, "showProduct"]);
