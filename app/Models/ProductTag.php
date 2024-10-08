<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTag extends Model
{
    use HasFactory;

    protected $fillable = [
        'tag'
    ];

    public function Product()
    {
        return $this->belongsTo(Product::class);
    }
}
