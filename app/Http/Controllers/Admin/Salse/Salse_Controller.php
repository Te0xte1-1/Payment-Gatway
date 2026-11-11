<?php

namespace App\Http\Controllers\Admin\Salse;


use App\Models\order;
use App\Models\salse;
use App\Models\Units;
use App\Models\Stocks;
use App\Models\Product;
use App\Models\category;
use App\Models\pay_type;
use App\Models\bill_type;
use App\Models\Customers;
use App\Models\Treasures;
use App\Models\Stock_data;
use App\Models\Store_data;
use Illuminate\Http\Request;
use App\Models\salse_detailse;
use App\Http\Controllers\Controller;
use App\Models\Treasures_Transactions;

class Salse_Controller extends Controller
{
    public function index(Request $request)
    {
        $pay_type = pay_type::all();
        $bill_type = bill_type::all();
        $Salse = salse::select('*')->orderby('id', 'Desc')->get();
        $Customers = Customers::all();
        $Stocks = Stocks::all();
        $units = Units::all();
        $Categorys = category::with('products')->get();
        return view('Salse.index', compact('Salse', 'Categorys', 'Customers', 'units', 'Stocks', 'pay_type', 'bill_type'));
    }
    public function load_salse_table(Request $request)
    {
        if ($request->ajax()) {
            # code...
        }
        $Salse = salse::select('*')->orderby('id', 'Desc')->get();
        return view('Salse.load_salse.load_salse_table', compact('Salse'));
    }

    public function add_item_to_invoice(Request $request)
    {
        if ($request->ajax()) {
            $data =  $request->data;
            // $data =  json_encode($request->data);
            // return $data;
            return view('Salse.load_salse.load_table_added', compact('data'));
        }
    }

    public function load_complete_invoice(Request $request)
    {

        if ($request->ajax()) {
            salse::create([
                'serial' => $request->serial,
                'customer_id' => $request->cusotmer,
                'account_number' => $request->cusotmer,
                'bill_type' => $request->bill_type,
            ]);

            $serial = $request->serial;
            $Customers = Customers::all();
            $Stocks = Stocks::all();
            $Categorys = category::all();
            $units = Units::all();
            $data = salse::where('serial', $serial)->first();
            return view('Salse.load_salse.load_complete_invoice', compact('data', 'Customers', 'Stocks', 'Categorys', 'units'));
        }
    }
    public function load_pro_by_cat(Request $request)
    {

        if ($request->ajax()) {

            $cat_id = $request->cat_id;
            $data = category::with('products')->find($cat_id);

            return view('Salse.load_salse.load_pro_by_cat_id_in_salse', compact('data'));
        }
    }

    public function load_product_price(Request $request)
    {
        if ($request->ajax()) {

            $pro_id = $request->pro_id;
            $data = Product::select('price')->find($pro_id);
            return $data;
            // return view('Salse.load_salse.load_product_price', compact('data'));
        }
    }

    public function store(Request $request)
    {
        $order = order::create([
            'customer_name' => $request->customer_name,
            'Total' => $request->gogal,
            "customer_email" => $request->customer_location
        ]);

        foreach ($request->pro as $index => $cats) {

            // $order->products()->attach(
            //     $cats,
            //     [
            //         'quantity' => $request->QTY[$index],
            //         'price'    => $request->price[$index],
            //     ]
            // );
        }

        return redirect()->route('Salse');
    }
    public function All_invoice_data(Request $request)
    {
        // Added Button For Save Type With Print Or Without Print with value

        $pay_type = $request->pay_type;
        if ($pay_type == 1) {
            $serial = $request->serial;
            $salse = salse::where('serial', $serial)->first();
            $salse->update([
                'serial' => $serial,
                'is_approved' => 1,
                'total' => $request->gogal,
                'bill_type' => 1,
                'pay_type' => $request->pay_type,
                'what_paid' => $request->what_paid,
                'what_not_yet_paid' => $request->what_not_yet_paid,
                'treasures_id' => $request->treasures_id,
                'total_item_count' => $request->total_item_count,
                'note' => $request->note,
            ]);

            foreach ($request->pro as $index => $cats) {

                $salse->products()->attach(
                    $cats,
                    [
                        'category_id' => $request->cat[$index],
                        'product_id' => $request->pro[$index],
                        'qty' => $request->qty[$index],
                        'price'    => $request->price[$index],
                        'subtotal'    => $request->sub_total[$index],

                    ]
                );
            }
            // الفاتورة كاش سوف يتم التأثير على أربعه جداول  المخازن,العمليات المالية,الخزينة++, تأثير على حساب العميل

            // ***********************  Teasures Table Effects *******************
            $treasures_id = $request->treasures_id;
            $transaction = Treasures::where('id', $treasures_id)->first();

            $trans_id = $transaction->last_isal_exchange;

            if (($transaction->last_isal_exchange) == 0) {
                $trans_id = $transaction->last_isal_exchange = 1;
            } else {
                $trans_id = $transaction->last_isal_exchange + 1;
            }
            $treasure_serial = $request->treasures;
            $update_trans = Treasures::where('id', $treasures_id)->update([
                'last_isal_exchange' => $trans_id
            ]);
            $treasures_transaction = Treasures_Transactions::create([
                'isal_number' => $trans_id,
                'shift_code' => 1,
                'treasures_id' => $treasures_id,
                'is_account' => 1,
                'account_number' => $request->accounts,
                'money' => $request->gogal * (-1),
                'money_for_account' => $request->gogal * (1),
                'move_type_id' => $request->money_move,
                'note' => $request->note,
                'date' => $request->date,
            ]);
            // ***********************  End Teasures Table Effects *******************



            // ***********************  Store Data Table Effects *******************

            $id = $request->id_update;
            $items_bill_deettailse = salse_detailse::where('salse_id', $id)->get();
            foreach ($items_bill_deettailse as $data) {
                $check_pro = Store_data::select(
                    'id',
                    'store_id',
                    'batch_id',
                    'qty',
                    'unit_cost_price',
                    'total_cost_unit',
                    'production_date',
                    'expiration_date'
                )->where('pro_id', $data->product_id)->first();
                if (isset($check_pro)) {
                    $check_pro->update([
                        'qty' => $check_pro->qty -= $data->qty,
                        'total_cost_unit' => $check_pro->total_cost_unit += $data->subtotal,
                    ]);
                } else {
                    return $check_pro . " These Item Not Found On Stock";
                };
            }
            // ***********************  End Store Data Table Effects *******************
            $salse_data = salse_detailse::where('salse_id', $salse->id)->get();
            return view('Prints.Salse.Print_A6', compact('salse', 'salse_data'));
            // return redirect()->route('Salse');
        }
    }

    public function edit($id)
    {
        $pay_type = pay_type::all();
        $bill_type = bill_type::all();
        $bill_salse_info = salse::find($id);
        $bill_salse_detailse = salse_detailse::where('salse_id', $id)->get();
        return view('Salse.edit', compact('bill_salse_info', 'bill_salse_detailse', 'bill_type', 'pay_type'));
    } //edit function
    public function load_edit_bill(Request $request)
    {
        if ($request->ajax()) {
            $category = category::all();
            $Units = Units::all();
            $stocks = Stocks::all();
            $bill_id = $request->bill_id;
            $bill_salse_info = salse::find($bill_id);
            $bill_salse_detailse = salse_detailse::select('id', 'salse_id', 'category_id', 'product_id', 'price', 'qty', 'subtotal')->where('salse_id', $bill_salse_info->id)->get();
            foreach ($bill_salse_detailse as $bill_salse_det) {

                $bill_salse_det->category_name =  category::where('id', $bill_salse_det->category_id)->value('cat_name');
                $bill_salse_det->product_name =  Product::where('id', $bill_salse_det->product_id)->value('product_name');
            }
            // return $bill_salse_detailse;
            return view('Salse.load_salse.load_edit_bill', compact('bill_salse_info', 'category', 'Units', 'stocks', 'bill_salse_detailse'));
        }
    }
    public function update($id)
    {
        return view('Salse.update');
    }
    public function delete($id)
    {
        return view('Salse.delete');
    }

    public function print()
    {

        return view('Prints.Salse_Print');
    }
}
