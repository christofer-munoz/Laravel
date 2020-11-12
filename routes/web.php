<?php

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\ProductResource;
use App\Http\Resources\CategoryResource;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
| php artisan route:list
*/

Route::get('/', function () {
    //return redirect("categories");
});

Route::get('/products', 'ProductController@index');
    //$products = Product::orderBy('name')->get();
    //return ProductResource::collection($products);
Route::post('products/', 'ProductController@store');
Route::get('/products/{product}', 'ProductController@show');
/*
Route::get('/products/{product}', function(Product $product) {
    //$product = Product::findOrFail($product);
    return new ProductResource($product);
});
*/
Route::get('/categories', function() {
    $categories = Category::orderBy('name')->get();
    return CategoryResource::collection($categories);
});