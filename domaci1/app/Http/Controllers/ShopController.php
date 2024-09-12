<?php

namespace App\Http\Controllers;

use App\Models\ProductsModel;
use App\Services\ProductsService;
use Illuminate\Http\Request;



class ShopController extends Controller
{
    protected $productsService;

    public function __construct(ProductsService $productsService)
    {
        $this->productsService = $productsService;
    }

    public function getAllProducts()
    {
        $allProducts = $this->productsService->getAllProductsData();
        return view("shop", compact("allProducts"));
    }

    public function adminProducts()
    {
        $allProducts = $this->productsService->getAllProductsData();
        return view("adminProducts", compact("allProducts"));
    }

    public function adminAddProduct(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|min:5|max:255', // Dodaj maksimalnu dužinu
            'description' => 'required|string|min:10', // Dodaj minimalnu dužinu
            'amount' => 'required|numeric|min:1', // Dodaj minimalnu vrednost
            'price' => 'required|numeric|min:0.01', // Dodaj minimalnu cenu
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Validacija za slike
        ]);

        $this->productsService->saveProduct($data);
        return redirect()->route('adminProducts');
    }
}
