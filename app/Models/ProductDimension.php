<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDimension extends Model
{
    use HasFactory;

    protected $fillable = [
        'weight',
        'height',
        'width',
        'depth'
    ];

    public function Product()
    {
        return $this->belongsTo(Product::class);
    }
}
