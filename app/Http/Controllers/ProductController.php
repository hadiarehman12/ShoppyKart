<?php

namespace App\Http\Controllers;

use App\Models\cate;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
        $category = cate::all();
        return view('product.form', compact('category'));
    }

    public function store(Request $request)
    {
        $product = new product();
        $product->product_name = $request->product_name;
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $image = $request->file('image');

        if ($image) {
            $imagename = time() . "." . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imagename);
            $product->image = $imagename;
        }

        $product->save();
        return redirect()->route('product.table');
    }

    public function table()
    {
        $product = product::all();
        return view('product.table', compact('product'));
    }
}
