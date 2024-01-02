<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function ViewProfile(){

        return view('app.backend.user.view_profile');
    }

    public function EditProfile(){

        return view('app.backend.user.edit_profile');
    }

    public function ViewProfileSecurity(){

        return view('app.backend.user.view_profile_security');
    }

}
