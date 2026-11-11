<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class Users_Controller extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('Users.index',compact('users'));
    }
    public function edit($id)
    {
        return view('Users.edit');
    }
    public function update($id)
    {
        return view('Users.update');
    }
    public function delete($id)
    {
        return view('Users.delete');
    }
}
