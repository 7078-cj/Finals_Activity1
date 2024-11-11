<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function Profile(Request $request,User $user){
        $profile = $user->userProfile; 
        $courses = $user->courses;

        return view('Profile',['profile'=>$profile,'courses'=>$courses,'user'=>$user]);
    }
}
