<?php

namespace App\Http\Controllers;

use App\Models\cate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function create()
    {
        return view("category.form");
    }
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|string',
        ]);
        $image = $request->file('image');
        $category = new cate();
        if ($image) {
            $imagename = time() . "." . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imagename);
            $category->image = $imagename;
        }

        $category->category = $request->category;
        $category->save();
        return redirect()->back();
    }
}
