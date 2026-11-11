<?php

namespace App\Http\Controllers\Admin\Accounts;

use App\Http\Controllers\Controller;
use App\Models\accounts;
use App\Models\accounts_type;
use Illuminate\Http\Request;

class Accounts_Controller extends Controller
{
    public function index()
    {
        $accounts = accounts::all();
        return view('Account_Tree.index', compact('accounts'));
    }
    public function create()
    {

        $last_number = accounts::select('id')->count('id');
        if (!empty($last_number)) {

            $last_number = accounts::select('id')->count('id');
            if ($last_number > 0) {
                $last_number += 1;
            }
           
        } else {

            $last_number = 1;
        }

        $acc_type = accounts_type::where('related_internal_account', 0)->get();
        $acc = accounts::where('is_parent', 1)->get();
        return view('Account_Tree.create', compact('acc_type', 'acc', 'last_number'));
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $last_number = accounts::select('account_number')->orderby('id', 'Desc')->first();

        $account_added = accounts::create([
            'name' => $request->acc_name,
            'account_type' => $request->acc_type,
            'account_number' => $request->acc_number,
            'is_parent' => $request->is_parent,
            'start_balance_status' => $request->balance_status,
            'start_balance' => $request->start_balance,
            'current_balance' => $request->current_balance,
            'notes' => $request->note,
            'is_archived' => $request->active,
        ]);

        return redirect()->route('Account_Tree');
    }

    public function show($acc_id)
    {
        $acc_data = accounts::find($acc_id);
        // return $acc_data;
        return view('Account_Tree.show', compact('acc_data'));
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
