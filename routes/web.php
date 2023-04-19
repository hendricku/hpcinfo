<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;

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

//list all products
Route::get('/', [ProductController::class, 'index' ]);
//show single product
Route::get('/product/{product}',[ProductController::class, 'show' ]);
  
  /*  
Route::get('/product-view/{product}', function(Product $product){
    return view('product',[
        'product' => $product
    ]);
});
*/

//create form 
route::get('/products/create', [ProductController::class,'create']);

Route::post('/products', [ProductController::class,'store']);