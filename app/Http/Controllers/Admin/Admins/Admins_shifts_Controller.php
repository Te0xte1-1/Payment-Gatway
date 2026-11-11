<?php

namespace App\Http\Controllers\Admin\Admins;

use App\Http\Controllers\Controller;
use App\Models\Admins_shifts;
use App\Models\Treasures;
use Illuminate\Http\Request;

class Admins_shifts_Controller extends Controller
{
    public function index()
    {
        $treasures = Treasures::all();
        $admins_shift = Admins_shifts::all();
        $shift_data = Admins_shifts::where('admin_id', 1)->first();
        return view('Admins_Shifts.index', compact('admins_shift', 'treasures', 'shift_data'));
    }

    public function create()
    {

        $treasures = Treasures::all();
        return view('Admins_Shifts.create', compact('treasures'));
    }


    public function store(Request $request)
    {
        Admins_shifts::create([
            'treasures_id' => $request->treasures_id,
            'admin_id' => 1
        ]);
        return redirect()->route('Admin_Shifts');
    }
    public function close()
    {

        $admin_shifts_update = Admins_shifts::where('admin_id', 1);
        $admin_shifts_update->update([
            'is_finished' => 1
        ]);
        return redirect()->route('Admin_Shifts');
    }

    /**
     * Display the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
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
