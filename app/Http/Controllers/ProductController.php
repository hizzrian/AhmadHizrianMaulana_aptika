<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        return View('products', [
            "title" => "All Products",
            "active" => 'products',
            // "products" => Product::all()
            "products" => Product::latest()->filter(request(['search']))->paginate(7)
        ]);
    }

    public function getOneProduct(Product $product){
        return View('product', [
            "title" => "Single Product",
            "active" => 'products',
            "product" => $product
        ]);
    }
}
