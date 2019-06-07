<?php

namespace creche\Http\Controllers;

<<<<<<< HEAD
use creche\Creche;
=======
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
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
<<<<<<< HEAD
        $creches = Creche::all();
        return view('creches.listagem',['creches'=>$creches]);


=======
        return view('/');
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
    }

    public function show()
    {
        dd(auth()->user()->toArray());
    }
}
