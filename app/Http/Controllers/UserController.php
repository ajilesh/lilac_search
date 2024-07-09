<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UserController extends Controller
{
    public function index()
    {
        $users = Users::all();
        //dd($users);
        return view('users', compact('users'));
    }
}
