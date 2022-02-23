<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


use Illuminate\Routing\Controller;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.products.index', [
            'products' => Product::where('user_id', auth()->user()->id)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('dashboard.products.create', [
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->file('image')->store('product-images');
        $validateData = $request->validate([
            'title' => 'required',
            'slug' => 'required | unique:products',
            'category_id' => 'required',
            'image' => 'image|file| mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
            'discount' => 'required',
            'sku' => 'required',
            'price' => 'required',
            'weight' => 'required',
            'stock' => '',
        ]);

        if($request->file('image')){
            $validateData['image'] = $request->file('image')->store('product-images');
        }

        $validateData['user_id'] = auth()->user()->id;
        $validateData['mini_description'] = Str::limit(Strip_tags($request->description), 100);
        $validateData['discount_price'] = $validateData['price'] - ($validateData['price'] * $validateData['discount'] / 100);
       Product::create($validateData);
         return redirect('/dashboard/products')->with('success', 'Product created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        return view('dashboard.products.show', [
            'product' => $product,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('dashboard.products.edit', [
            'product' => $product,
            'categories' => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
       $rules = [
        'title' => 'required',
        'slug' => 'required | unique:products',
        'category_id' => 'required',
        'description' => 'required',
        'discount' => 'required',
        'sku' => 'required',
        'price' => 'required',
        'weight' => 'required',
        'stock' => '',
       ];


       if ($request->slug != $product->slug) {
           # code...
           $rules['slug'] = 'required | unique:products';
       }
       $validateData = $request->validate($rules);
         $validateData['user_id'] = auth()->user()->id;
            $validateData['mini_description'] = Str::limit(Strip_tags($request->description), 100);
            $validateData['discount_price'] = $validateData['price'] - ($validateData['price'] * $validateData['discount'] / 100);
            if($request->file('image')){
                $validateData['image'] = $request->file('image')->store('product-images');
                }
        Product::where('id', $product->id)->update($validateData);
        return redirect('/dashboard/products')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Product::destroy($product->id);
        return redirect('/dashboard/products')->with('success', 'The product was successfully removed');
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);

        return response()->json(['slug' => $slug]);
    }
}
