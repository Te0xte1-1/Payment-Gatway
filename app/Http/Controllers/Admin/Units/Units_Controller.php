<?php

namespace App\Http\Controllers\Admin\Units;

use App\Http\Controllers\Controller;
use App\Models\Units;
use Illuminate\Http\Request;

class Units_Controller extends Controller
{
    public function index(){
    
        $Units = Units::all();
        return view('Units.index',compact('Units'));
    
    }
    public function store(Request $request){
        
        Units::create([
            'unit_name' => $request->unit_name,
            'unit_number' => $request->unit_number
        ]);
        return redirect()->route('Units');
       
    }
     public function edit(Request $id){
    
        return view('Units.index',compact(''));
    }public function update($id){
    
    
    }public function delete($id){
    
    
    }
}
