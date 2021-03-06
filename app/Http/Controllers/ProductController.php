<?php

namespace App\Http\Controllers;

use App\Http\Resources\Product\ProductResource;
use App\Http\Resources\Product\ProductCollection;
use App\Model\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index(){
        return ProductCollection::collection(Product::paginate(20));
    }

    public function create(){
        //
    }

    public function store(Request $request){
        //
    }

    public function show(Product $product){
        // return $product;
        return new ProductResource($product);
    }

    public function edit(Product $product){
        //
    }

    public function destroy(Product $product){
        //
    }

}
