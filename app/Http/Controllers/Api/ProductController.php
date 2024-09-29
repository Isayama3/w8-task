<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Services\Product\FetchProductsData;

class ProductController extends Controller
{
    public function index(){
        return FetchProductsData::fetchProductsAndSaveToDatabase();
    }

    // public function show($id){
    //     $record = Product::findOrFail($id);
    //     return $this->respondWithModelData(ProductResource::make($record));
    // }
}
