<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    public function show(User $user)
    {
        return view('users.show',compact('user'));//用户对象 $user 通过 compact 方法转化为一个关联数组，并作为第二个参数传递给 view 方法
    }
}
