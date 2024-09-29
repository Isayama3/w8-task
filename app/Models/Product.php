<?php

namespace App\Models;

use App\Base\Traits\Model\FilterSort;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class Product extends Model
{
    use HasFactory, FilterSort;

    protected $fillable = [
        'title',
        'description',
        'category',
        'price',
        'discountPercentage',
        'rating',
        'stock',
        'brand',
        'sku',
        'warrantyInformation',
        'shippingInformation',
        'availabilityStatus',
        'returnPolicy',
        'minimumOrderQuantity',
        'thumbnail',
    ];

    public static function getTableName()
    {
        return with(new static())->getTable();
    }

    public static function MyColumns()
    {
        return Schema::getColumnListing(self::getTableName());
    }

    public static function filterColumns(): array
    {
        return array_merge(self::MyColumns(), [
            static::createdAtBetween('created_from'),
            static::createdAtBetween('created_to'),
            static::FilterSearchInAllColumns('search'),
        ]);
    }

    public static function sortColumns(): array
    {
        return self::MyColumns();
    }

    public function Images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function Tags()
    {
        return $this->hasMany(ProductTag::class);
    }

    public function Reviews()
    {
        return $this->hasMany(ProductReview::class);
    }

    public function Dimensions()
    {
        return $this->hasOne(ProductDimension::class);
    }

    public function Meta()
    {
        return $this->hasOne(ProductMeta::class);
    }
}
