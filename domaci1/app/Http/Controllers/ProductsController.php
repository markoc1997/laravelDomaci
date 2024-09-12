<?php

namespace App\Http\Controllers;

use App\Models\ProductsModel;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $allProducts = ProductsModel::all();
        return view("allProducts", compact("allProducts"));
    }

    public function delete($product)
    {

        $singleProduct = ProductsModel::where(['id' => $product])->first();

        if (!$singleProduct) {
            die("Nije pronadjen");
        }

        $singleProduct->delete();
        return redirect()->back();
    }
}
