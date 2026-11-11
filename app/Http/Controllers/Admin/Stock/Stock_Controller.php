<?php

namespace App\Http\Controllers\Admin\Stock;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\Product;
use App\Models\Stock_data;
use App\Models\Stocks;
use Illuminate\Http\Request;

class Stock_Controller extends Controller
{
    public function index()
    {
        $Stocks = Stocks::all();
        foreach ($Stocks as $value) {

            $total_items_on_stock = Stock_data::select('store_id', 'qty')->where('store_id', $value->id)->sum('qty');
            // return $total_items_on_stock;
        }
        return view('stock.index', compact('Stocks', 'total_items_on_stock'));
    }
    public function store(Request $request)
    {

        Stocks::create([
            'stock_name' => $request->stock_name,
            'stock_location' => $request->stock_desc
        ]);
        return redirect()->route('Stock');
    }
    public function show($stock_id)
    {
        // $data = Product::where('does_has_unit', $stock_id)->get();
        // return view('stock.show_products', compact('data'));
        // $data = Stock_data::where('store_id', $stock_id)->get();
        // return view('stock.show_products', compact('data'));
        $category = category::all();
        $data = Stock_data::where('store_id', $stock_id)->get();
        return view('stock.show_products', compact('data', 'stock_id', 'category'));
    }
    public function send_between_stocks()
    {

        $Stocks = Stocks::all();
        $items = Product::all();
        return view('Send_Between_Stocks.index', compact('Stocks', 'items'));
    }
    public function Stock_cat_to_pro(Request $request)
    {
        if ($request->ajax()) {
            $store_id = $request->store_id;
            $cat_id = $request->cat_id;
            $data = Stock_data::select('cat_id','pro_id','qty','unit_cost_price','total_cost_unit')->where(['store_id' => $store_id, 'cat_id' => $cat_id])->get();

            return view('stock.show_product_after_cat',compact('data'));
        }
    }

    public function edit($id)
    {
    }
    public function update($id)
    {
    }
    public function delete($id)
    {
    }
}
