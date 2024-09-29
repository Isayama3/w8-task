<?php

namespace App\Services\Product;

use App\Base\Services\BaseService;
use App\Repositories\ProductRepository;

class ProductService extends BaseService
{
    protected ProductRepository $ProductRepository;

    public function __construct(ProductRepository $ProductRepository)
    {
        parent::__construct($ProductRepository);
        $this->ProductRepository = $ProductRepository;
    }
}
