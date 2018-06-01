<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //用户页面展示
    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }
    //用户页面
    public function edit()
    {

    }
}
