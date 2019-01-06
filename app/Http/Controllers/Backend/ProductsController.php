<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Product;

class ProductsController extends BackendController
{
    public function index()
    {
        $products      = Product::orderBy('created_at', 'esc')->paginate($this->limit);
        $productCount = Product::count();

        return view("backend.products.index", compact('products', 'productCount'));
    }

    public function create()
    {
        $product = new Product();
        return view("backend.products.create", compact('product'));
    }

    public function store(Requests\ProductStoreRequest $request)
    {
        Product::create($request->all());

        return redirect("/backend/products")->with("message", "New product was created successfully!");
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view("backend.products.edit", compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\ProductUpdateRequest $request, $id)
    {
        Product::findOrFail($id)->update($request->all());

        return redirect("/backend/products")->with("message", "Product was updated successfully!");
    }

    public function destroy($id)
    {
        Product::findOrFail($id)->delete();

        return redirect('/backend/products')->with('trash-message', ['Your product is deleted', $id]);
        
    }
}
