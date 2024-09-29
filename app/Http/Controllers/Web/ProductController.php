<?php

namespace App\Http\Controllers\Web;

use App\Base\Controllers\BaseWebController;
use App\Models\Product as Model;
use App\Http\Requests\Web\ProductRequest as FormRequest;
use App\Services\Product\ProductService as Service;

class ProductController extends BaseWebController
{
    protected $ProductService;

    public function __construct(
        FormRequest $request,
        Model $model,
        Service $service,
    ) {
        parent::__construct(
            $request,
            $model,
            $service,
            view_path: 'admin.products.',
            hasCreate: false,
            hasEdit: false,
            hasDelete: false,
            storePermission: 'admin.products.store',
            showPermission: 'admin.products.show',
            updatePermission: 'admin.products.update',
            destroyPermission: 'admin.products.destroy',
        );

        $this->ProductService = $service;
        $this->ProductService->setIndexRelations(['Images','Tags','Meta','Reviews','Dimensions']);
        $this->ProductService->setOneItemRelations(['Images','Tags','Meta','Reviews','Dimensions']);
        $this->ProductService->setCustomWhen($this->customWhen());
    }

    public function customWhen(): array
    {
        return [
            'condition' => false,
            'callback' => function ($q) {},
        ];
    }
}
