<?php

namespace creche\Http\Controllers;

use creche\Creche;
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
        $creches = Creche::all();
        return view('creches.listagem',['creches'=>$creches]);


    }

    public function show()
    {
        dd(auth()->user()->toArray());
    }
}
