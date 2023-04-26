<?php

use App\Http\Controllers\BlogController;
use Illuminate\Pagination\paginate;
use App\Models\Blog;

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

//list all Blogs
Route::get('/', [BlogController::class, 'index' ]);
//show single Blog
Route::get('/Blog/{Blog}',[BlogController::class, 'show' ]);
  
  /*  
Route::get('/Blog-view/{Blog}', function(Blog $Blog){
    return view('Blog',[
        'Blog' => $Blog
    ]);
});
*/

//create form 
route::get('/Blogs/create', [BlogController::class,'create']);

Route::post('/Blogs', [BlogController::class,'store']);