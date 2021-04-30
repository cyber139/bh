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
    public function index(Request $request)
    {

        // create and read session
        // session(['humaira'=>'instructer']);

        // delete session
        // $request->session()->forget('humaira');
        // delete all data(sign out)
        // $request->session()->flush();
        // return  $request->session()->all();


        // Sent data like message one time only.
        // $request->session()->flash('message','Post sent');
        return  $request->session()->get('message');


        return view('home');
    }
}
