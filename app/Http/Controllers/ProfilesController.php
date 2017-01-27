<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($slug)
    {
    	$user = User::where('slug', $slug)->first();
    	return('profiles.profile')->with('user', $user);
    }
}
