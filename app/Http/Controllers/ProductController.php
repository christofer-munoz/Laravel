<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('name')->get();
        return ProductResource::collection($products);
    }
    public function show(Product $product)
    {
        return new ProductResource($product);
    }
    public function store()
    {
        //aquí van las validaciones
        $data = request()->all(); //all() obtiene todos los parámetros en la instancia de la petición
        $product = Product::create($data);
        return new ProductResource($product);
    }
}
