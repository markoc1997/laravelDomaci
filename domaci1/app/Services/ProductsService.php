<?php

namespace App\Services;

use App\Models\ProductsModel;

class ProductsService
{
    public function getAllProductsData()
    {
        return ProductsModel::all();
    }

    public function saveProduct(array $data)
    {
        return ProductsModel::create($data);
    }
}
