<?php

namespace App\Http\Controllers;
use App\Models\item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function create()
    {
        return view("item.form");
    }
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
        ]);

        $item = new item();
        $image = $request->file('image');
        if ($image) {
            $imagename = time() . "." . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imagename);
            $item->image = $imagename;
        }
        $item->description = $request->description;
        $item->save();

        return redirect()->back()->with('success', 'Data stored successfully!');
    }


}