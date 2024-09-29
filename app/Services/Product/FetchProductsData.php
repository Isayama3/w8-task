<?php

namespace App\Services\Product;

use App\Models\Product;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class FetchProductsData
{
    public static function fetchProductsAndSaveToDatabase()
    {
        try {
            $response = Http::get("https://dummyjson.com/products")->json();
            $products = $response['products'];

            DB::beginTransaction();

            foreach ($products as $product_data) {
                $product = Product::updateOrCreate(
                    ['id' => $product_data['id']],
                    [
                        'title' => $product_data['title'],
                        'description' => $product_data['description'],
                        'category' => $product_data['category'],
                        'price' => $product_data['price'],
                        'discountPercentage' => $product_data['discountPercentage'],
                        'rating' => $product_data['rating'],
                        'stock' => $product_data['stock'],
                        'brand' => isset($product_data['brand']) ? $product_data['brand'] : null,
                        'sku' => $product_data['sku'],
                        'warrantyInformation' => $product_data['warrantyInformation'],
                        'shippingInformation' => $product_data['shippingInformation'],
                        'availabilityStatus' => $product_data['availabilityStatus'],
                        'returnPolicy' => $product_data['returnPolicy'],
                        'minimumOrderQuantity' => $product_data['minimumOrderQuantity'],
                        'thumbnail' => $product_data['thumbnail']
                    ]
                );

                foreach ($product_data['images'] as $imageUrl) {
                    $product->Images()->updateOrCreate(
                        ['product_id' => $product->id],
                        [
                            'image' => $imageUrl,
                        ]
                    );
                }

                foreach ($product_data['tags'] as $tag) {
                    $product->Tags()->updateOrCreate(
                        ['product_id' => $product->id],
                        [
                            'tag' => $tag,
                        ]
                    );
                }

                foreach ($product_data['reviews'] as $review) {
                    $product->Reviews()->updateOrCreate(
                        ['product_id' => $product->id],
                        [
                            'rating' => $review['rating'],
                            'comment' => $review['comment'],
                            'reviewerName' => $review['reviewerName'],
                            'reviewerEmail' => $review['reviewerEmail'],
                            'date' => $review['date'],
                        ]
                    );
                }

                $product->Dimensions()->updateOrCreate(
                    ['product_id' => $product->id],
                    [
                        'width' => $product_data['dimensions']['width'],
                        'height' => $product_data['dimensions']['height'],
                        'depth' => $product_data['dimensions']['depth'],
                        'weight' => $product_data['weight'],
                    ]
                );

                $product->Meta()->updateOrCreate(
                    ['product_id' => $product->id],
                    [
                        'barcode' => $product_data['meta']['barcode'],
                        'qrCode' => $product_data['meta']['qrCode'],
                        'createdAt' => $product_data['meta']['createdAt'],
                        'updatedAt' => $product_data['meta']['updatedAt'],
                    ]
                );
            }

            DB::commit();
            return response()->json(['message' => 'Fetching data done and saved to DB'], 200);
        } catch (Exception $e) {
            DB::rollBack();
            dd($e->getMessage());
            return response()->json(['message' => 'error in fetching products data', 500]);
        }
    }
}
