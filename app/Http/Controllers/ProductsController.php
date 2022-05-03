<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use App\Models\ProductOption;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products/index', ['products' => $products]);
    }

    public function add()
    {
        return view('products/add');
    }
    
    public function store(StoreProductRequest $request)
    {
        $product = new Product();
        $product->sku=$request->sku;
        $product->name=$request->name;
        $product->price=$request->price;
        $product->type=$request->productType;
        $product->save();

        if($product->type == 1) {
            $productOption = new ProductOption();
            $productOption->product_id = $product->id;
            $productOption->name = 'size';
            $productOption->value = $request->size;
            $productOption->save();
        }
        if($product->type == 2) {
            $productOption = new ProductOption();
            $productOption->product_id = $product->id;
            $productOption->name = 'height';
            $productOption->value = $request->height;
            $productOption->save();

            $productOption = new ProductOption();
            $productOption->product_id = $product->id;
            $productOption->name = 'length';
            $productOption->value = $request->length;
            $productOption->save();

            $productOption = new ProductOption();
            $productOption->product_id = $product->id;
            $productOption->name = 'width';
            $productOption->value = $request->width;
            $productOption->save();
        }
        if($product->type == 3) {
            $productOption = new ProductOption();
            $productOption->product_id = $product->id;
            $productOption->name = 'weight';
            $productOption->value = $request->weight;
            $productOption->save();
        }

        return redirect()->route('products.index');
    }

    public function delete()
    {
        $ids = request()->ids;
        foreach($ids as $id) 
        {
            ProductOption::where('product_id', $id)->delete();
            Product::where('id', $id)->delete();
        }
        return redirect()->route('products.index');
    } 
}
