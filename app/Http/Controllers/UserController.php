<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function list()
    {
        $users = User::all(); 
        return view('users.list', compact('users'));
    }
}
