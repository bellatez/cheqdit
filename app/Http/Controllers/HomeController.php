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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(auth()->user()->is_active && auth()->user()->email_verified_at != null){
            return view('dashboard.index');
        }
        elseif (auth()->user()->email_verified_at == null) {
            return view('users.password-reset');
        }
        else {
            return view('home');
        }
    }
}
