<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class Dashboard_Controller extends Controller
{

    public function index()
    {
        return view('Dashboard');
    }
    public function login()
    {
        return view('login');
    }
    public function login_store(Request $request)
    {


        if (auth('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {

            return redirect()->route('Dashboard');
        } else {

            return redirect()->back()->with(['error' => 'Email Or Password Not Correct']);
        }
    }
    public function new()
    {
        return view('users.new');
    }
    public function new_store(Request $request)
    {

        $val = validator($request->all(), [

            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'full_name' => 'required',

        ]);
        if ($val->fails()) {
            return redirect()->back()->with(['error' => $val->errors()->all()]);
        }
        $full_name = $request->full_name;
        $username = $request->username;
        $email = $request->email;
        $password = $request->password;


        $user = User::create([
            'full_name' => $full_name,
            'username' => $username,
            'email' => $email,
            'password' => $password,

        ]);


        $role = Role::whereSlug('user')->first();
        $user->roles()->attach($role);

        if ($user) {
            auth('web')->attempt(['email' => $user->email, 'password' => $user->password]);
            return redirect()->route('Room', compact($user->full_name));
        } else {
            return "There some Things Wrong";
        }
    }

    public function logout()
    {
        auth('admin')->logout();
        return redirect()->route('login');
    }


    public function contact()
    {

        return view('Contact_us');
    }
    public function about()
    {

        return view('about_us');
    }
}
