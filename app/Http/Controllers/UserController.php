<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests;
use App\Http\Usertypes;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users', [
            'users' => $users,
        ]);
    }
    public function show(User $user)
    {
        $user->load('teams');
//        $user->teams()->attach(1);
        return $user->teams;

        return view('user', [
            'name' => 'Jonh Snow',
            'user' => $user,
        ]);

    }
}
