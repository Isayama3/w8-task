<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductMeta extends Model
{
    use HasFactory;

    protected $fillable = [
        'barcode',
        'qrCode',
        'createdAt',
        'updatedAt'
    ];

    public function Product()
    {
        return $this->belongsTo(Product::class);
    }
}
