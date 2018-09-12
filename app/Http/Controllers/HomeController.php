<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function dashboard_welcome()
    {
        $user = auth()->user();
        return view('dashboard')->with('user',$user);
    }

    public function editUserForm()
    {
        $user = auth()->user();
        return view('editUser')->with('user',$user);
    }

    public function editUser(Request $request)
    {
        $user = auth()->user();


        $request->validate([
          'name' => 'required',
          'email' => 'required',
          'phone' => 'required|numeric'
        ]);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');

        $user->save();
        return redirect('/dashboard');
    }
}
