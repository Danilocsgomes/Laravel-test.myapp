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
//        $team = Team::find(1);
//        $user->load('teams');
//        $team->users->attach(3);
//        return $team;

//      $user->teams()->attach([1, 2]);
//        $user->teams()->sync([2, 3]);
//        $user->teams()->syncWithoutDetaching([2, 3]);
//        $user->teams()->detach([1, 2]);
        return $user;

        return view('user', [
            'name' => 'Jonh Snow',
            'user' => $user,
        ]);

    }
}
