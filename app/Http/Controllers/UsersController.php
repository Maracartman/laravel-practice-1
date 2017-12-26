<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    //
    public function index(){
        return view('welcome');
    }

    public function create(){
        return view('admin.users.create');
    }

    public function show($id){

    }

    public function edit($id){

    }

    public function store(Request $request){
        $user = new User($request->all());
        $user->password = bcrypt($request->password);
        $user->save();
//        dd('Usuario creado.');
        dd($user);
    }
}
