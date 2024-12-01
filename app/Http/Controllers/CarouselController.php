<?php

namespace App\Http\Controllers;
use App\Models\shoppykart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarouselController extends Controller
{
    public function create()
    {
        return view("carousel.form");
    }
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'sale' => 'required|string',
            'heading' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
    
        $carousel = new shoppykart();
        $image = $request->file('image');
        if ($image) {
            $imagename = time() . "." . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imagename);
            $carousel->image = $imagename;
        }
        $carousel->sale = $request->sale;
        $carousel->heading = $request->heading;
        $carousel->description = $request->description;
        $carousel->save();

        return redirect()->back()->with('success', 'Data stored successfully!');
    }
    
}