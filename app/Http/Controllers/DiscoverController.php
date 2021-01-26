<?php

namespace App\Http\Controllers;

use App\Models\Story;
use App\Models\Product;
use Illuminate\Http\Request;

class DiscoverController extends Controller
{

    public function index()
    {
        $stories = Story::all();
         //$products = Product::all();
        $productsLove = Product::inRandomOrder()->limit(4)->get();
        $productsPaid = Product::where('price', '>', 0)->orderBy('price', 'desc')->limit(8)->get();


        return [


            'stories' => $stories,
            'productsLove' => $productsLove,
            'productsPaid' => $productsPaid,
//              header("Access-Control-Allow-Headers, Origin, X-Requested-With, Content-Type, Accept, Authorization"),
//              header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS'),
//              header('Origin, X-Requested-With, Content-Type, Accept, Authorization'),

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


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
