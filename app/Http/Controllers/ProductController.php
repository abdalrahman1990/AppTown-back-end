<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Resources\Product as ProductResource;

class ProductController extends Controller
{

    public function index()
    {
        return ProductResource::collection(Product::orderBy('created_at', 'desc')->paginate(6));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $product = Product::create($request->all());
        return new ProductResource($product);
    }


    public function show(product $product)
    {
       // $product = Product::find($id);
       // return new ProductResource($product);

        return $product;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return ProductResource
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update($request->all());
        return new ProductResource($product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return ProductResource
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return new ProductResource($product);
    }
}
