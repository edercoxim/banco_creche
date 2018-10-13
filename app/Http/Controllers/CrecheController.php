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
    public function listaCreche()
    {
        $crechii=DB::select('select * from bd_creche.creches');
        return view('creches.listagem')->with('crechii', $crechii);
    }

    public function create(){
        return view('creches.create');
    }

    public function store(CrecheRequest $request){
        $input = $request->all();
        Creche::create($input);
        return redirect('creches');
    }

    public function destroy($id){
        Creche::find($id)->delete();
        return redirect('creches');
    }

    public function edit($id){
        $creche = Creche::find($id);
        return view('creches.edit',compact('creche'));
    }

    public function update(CrecheRequest $request, $id){
        $creche = Creche::find($id)->update($request->all());
        return redirect('creches');
    }
}
