<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function allUser(){
        $profiles = Profile::all();
        $courses = Course::all();// para lang makita agad kung gamagana ung many to many sa user
        return view('Users',['profiles'=>$profiles,'courses'=>$courses]);
    }
}
