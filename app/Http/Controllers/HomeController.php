<?php

namespace App\Http\Controllers;
use App\Models\shoppykart;
use App\Models\item;
use App\Models\cate;
use App\Models\product;
use Illuminate\Http\Request;
use App\Models\card;

use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function shoppy()
    {
        $card = card::all();
        $carousel = shoppykart::all();
        $category = cate::all();
        $item = item::all();
        return view("Shoppykart", compact('carousel', 'card', 'category', 'item'));
    }
    public function product($id)
    {
        $product = product::where('category_id', $id)->get();
        return view('product', compact('product'));
    }
}