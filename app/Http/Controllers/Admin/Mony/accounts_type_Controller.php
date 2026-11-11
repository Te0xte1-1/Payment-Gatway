<?php

namespace App\Http\Controllers\Admin\Mony;

use App\Http\Controllers\Controller;
use App\Models\accounts_type;
use Illuminate\Http\Request;

class accounts_type_Controller extends Controller
{
    /**
     * Show the form for creating the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $mony_acconunt_type = accounts_type::all();
        return view('Account_Mony_Type.index',compact('mony_acconunt_type'));
        
        
        }
    public function create()
    {
        abort(404);
    }

    public function store(Request $request)
    {
        abort(404);
    }
    public function edit($id)
    {
        $edit_data = accounts_type::select()->find($id);
        return view('Account_Mony_Type.edit', compact('edit_data'));
    }

    /**
     * Update the resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        dd($request);
    }

    /**
     * Remove the resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        abort(404);
    }
}
