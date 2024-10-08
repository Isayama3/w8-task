<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductReview extends Model
{
    use HasFactory; 

    protected $fillable = [
        'rating',
        'comment',
        'reviewerName',
        'reviewerEmail',
        'date'
    ];

    public function Product()
    {
        return $this->belongsTo(Product::class);
    }
}
