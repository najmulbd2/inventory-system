<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function Logout(){
        Auth::logout();
        return Redirect()->route('login');
    }

    public function Calendar(){
        return view('app.backend.calendar.calendar');
    }

}
