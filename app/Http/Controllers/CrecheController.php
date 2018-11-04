<?php

namespace creche\Http\Controllers;

use creche\Http\Requests\CrecheRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use creche\Creche;


class CrecheController extends Controller
{
    /**
     * @return $this
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $creches = Creche::all();
        return view('creches.listagem',['creches'=>$creches]);


    }

    public function create(){
        return view('creches.create');
    }

    public function store(CrecheRequest $request){
        $input = $request->all();
        Creche::create($input);
        return redirect()->route('creches');
    }

    public function destroy($id){
        Creche::find($id)->delete();
        return redirect()->route('creches');
    }

    public function edit($id){
        $creche = Creche::find($id);
        return view('creches.edit',compact('creche'));
    }

    public function update(CrecheRequest $request, $id){
        $creche = Creche::find($id)->update($request->all());
        return redirect()->route('creches');
    }
}
