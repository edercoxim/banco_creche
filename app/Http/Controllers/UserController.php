<?php

namespace creche\Http\Controllers;

use creche\Http\Requests\UserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $users = User::all();
        $creches = Creche::all();
        return view('users.index',['users'=>$users, 'creches'=>$creches]);
    }

    public function create(){
        $creches = Creche::all();
        return view('users.create',['creches'=>$creches]);
    }

    public function store(UserRequest $request){
        $input = $request->all();
        User::create($input);
        return redirect()->route('users');
    }

    public function destroy($id){
        User::find($id)->delete();
        return redirect()->route('users');
    }

    public function edit($id){
        $user = User::find($id);
        return view('users.edit',compact('user'));
    }

    public function update(UserRequest $request, $id){
        $user = User::find($id)->update($request->all());
        return redirect()->route('users');
    }
}
