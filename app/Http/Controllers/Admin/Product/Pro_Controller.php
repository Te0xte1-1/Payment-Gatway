<?php

namespace App\Http\Controllers\Admin\Product;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\category;

class Pro_Controller extends Controller
{
    public function index()
    {

        // $Category = category::all();
        $Products = Product::with('category')->get();
        return view('Product.index', compact('Products'));
    }

    public function create()
    {

        $category = category::all();
        return view('Product.create', compact('category'));
    }
    public function store(Request $request)
    {


        $file_extinstion = $request->photo->getClientOriginalExtension();
        $fil_name = time() . rand(1, 10000) . "." . $file_extinstion;
        $path = 'images/';
        $request->photo->move($path, $fil_name);
      
      
        Product::create([
            "category_id" => $request->category_id,
            "product_name" => $request->product_name,
            "product_description" => $request->product_description,
            "purshace_price" => $request->purshace_Price,
            "price" => $request->Price,
            "stock" => $request->stock,
            "risk" => $request->risk,
            "photo" => $fil_name,
        ]);
        // dd($request->all());

        return redirect()->back();
    }
    public function edit($id)
    {
        return view('Product.edit');
    }
    public function update($id)
    {
        return view('Product.update');
    }
    public function delete($id)
    {
        return view('Product.delete');
    }
}
