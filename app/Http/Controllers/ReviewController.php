<?php

namespace App\Http\Controllers;

use App\Http\Resources\Product\ProductResource;
use App\Http\Resources\Product\ProductCollection;
use App\Model\Product;
use App\Model\Review;
use Illuminate\Http\Request;


class ReviewController extends Controller
{

    public function index(){
        return ProductCollection::collection(Product::all());
    }

    public function show(Product $product){
        // return $product;
        return new ProductResource($product);
    }
}
