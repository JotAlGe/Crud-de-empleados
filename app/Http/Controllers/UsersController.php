<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveUserRequest;
use App\Models\User;
use Illuminate\Http\Request;



class UsersController extends Controller
{
    function index()
    {
        $users = User::orderBy('email', 'desc')->paginate(5);
        return view('users.index', compact('users'));
    }

    function show(User $user)
    {
        return view('users.show', ['userShow' => $user]);
    }

    function create()
    {
        return view('users.create', [
            'user' => new User
        ]);
    }


    /* store */
    function store(SaveUserRequest $request)
    {

        $request->validated();

        $user = User::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'id_level' => 2,
            'profession_id' => rand(1, 3)
        ]);
        #$user = User::create($request->all());
        return redirect()->route('users.index', $user);
        #return request()->only('name', 'lastname', 'email', 'password', 'id_level', 'profession_id');
    }

    function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index')->with('success', 'Usuario eliminado');
    }


    function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }

    function update(User $user, SaveUserRequest $request)
    {
        $user->update($request->validated());
        return redirect()->route('users.show', $user)->with('success', "Datos de $user->name actualizados");
    }
}
