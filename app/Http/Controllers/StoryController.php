<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{

    public function index()
    {
        $stories = Story::all();
        $products = Product::all();
        return[
            'stories'=>$stories,
            'products'=>$products,

        ];
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Story $story)
    {
        return $story;
    }


    public function edit(Story $story)
    {
        //
    }


    public function update(Request $request, Story $story)
    {
        //
    }


    public function destroy(Story $story)
    {
        //
    }
}

//Product::create($request->all());

//return response()->json('Product created!');
