<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


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

Route::get('/', [ProductController::class, 'index']);

// Route::get('/', function () {

//     $productRepository = new ProductRepository();
//     $productCache = new ProductCache();

//     $products = $productCache->getCachedProducts();

//     if (!$products) {
//         // If not cached, fetch from the repository and cache it
//         $products = $productRepository->getAllProducts();
//         $productCache->cacheProducts($products);
//     }

//     return view('welcome', ['products' => $products]);
// });
