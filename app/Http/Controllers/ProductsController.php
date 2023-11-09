<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Product;
use App\Models\Addproduct;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function admin()
    {
        $categories = DB::table('categories')->get()->toArray();
        return view('admin', ['categories' => $categories]);
    }

    public function catalog()
    {
        $products = DB::table('products')->get()->toArray();
        return view('catalog', ['products' => $products]);
    }


    public function category_insert(Request $request)
    {
        $category = new Category();
        //       dd($review);
        $category->name = $request->input('category');
        $category->save();
        return redirect()->route('admin');
    }
    public function product_insert(Request $request)
    {
        $product = new Product();
        //       dd($review);
        $product->category_id = $request->input('categories');
        $product->name = $request->input('name');
        $product->image = $request->input('img');
        $product->description = $request->input('desc');
        $product->price = $request->input('price');
        $product->save();
        return redirect()->route('admin');
    }
    public function addproduct_insert(Request $request)
    {
        $product = new Addproduct();
        //       dd($review);
        $product->image = $request->input('image');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->save();
        return redirect()->route('admin');
    }
}
