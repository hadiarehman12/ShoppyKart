<?php

namespace App\Http\Controllers;
use App\Models\card;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CardController extends Controller
{
    public function create()
    {
        return view("card.form");
    }
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
        ]);

        $card = new card();
        $image = $request->file('image');
        if ($image) {
            $imagename = time() . "." . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imagename);
            $card->image = $imagename;
        }
        $card->description = $request->description;
        $card->save();

        return redirect()->back()->with('success', 'Data stored successfully!');
    }

}