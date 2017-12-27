<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'ASC')->paginate(5);


        return view('admin.users.index')->with('users', $users);
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit')->with('user', $user);
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        flash('Usuario ' . $user->name . ' eliminado exitosamente.')->error();
        return redirect()->route('users.index');
    }

    public function store(UserRequest $request)
    {
        $user = new User($request->all());
        $user->password = bcrypt($request->password);
        $user->save();
        flash('Exito al guardar el usuario.')->success();
        return redirect()->route('users.index');
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
//        user->fill($request->all());
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->type != '')
            $user->type = $request->type;

        $user->save();
        flash('Exito al actualizar el usuario.')->success();
        return redirect()->route('users.index');
    }
}
