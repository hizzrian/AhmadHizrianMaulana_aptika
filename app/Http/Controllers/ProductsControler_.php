<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsControler extends Controller
{
    public function index()
    {
        return View('products', [
            "title" => "Products",
            "products" => Products::all()
        ]);
    }

    public function getOneProduct(Products $product){
        return View('product', [
            "title" => "Single Product",
            "product" => $product
        ]);
    }
}
