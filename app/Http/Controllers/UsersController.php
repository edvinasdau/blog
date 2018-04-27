<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{

    public function index()
    {
        $currentUser = Auth::user();
        $users = User::all();
        return view('users.index', ['users' => $users, 'currentUser' => $currentUser]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        User::create($request->except('_token'));
        return redirect()->route('users.index');
    }


    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', ['usersSingle' => $user]);
    }


    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', ['usersEdit' => $user]);
    }


    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->except('_token'));

        return redirect()->route('users.index', $id);
    }


    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('home');
    }
}
