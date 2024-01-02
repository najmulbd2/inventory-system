<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function ViewUser(){
        return view('app.backend.user.view_user');
    }

    public function AddUser(){
        return view('app.backend.user.add_user');
    }

}
