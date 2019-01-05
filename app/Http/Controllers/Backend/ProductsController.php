<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends BackendController
{
    public function index()
    {
        $products      = Product::orderBy('name')->paginate($this->limit);
        $productCount = Product::count();

        return view("backend.products.index", compact('products', 'productCount'));
    }
}
