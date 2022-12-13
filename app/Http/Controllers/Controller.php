<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Queue\RedisQueue;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index()
    {
        $users = User::all();
        return view('users', [
            'users' => $users,
            ]);
    }
    public function show(User $user)
    {
        return view('user', [
            'name' => 'Jonh Snow',
            'user' => $user,
        ]);
    }
}
