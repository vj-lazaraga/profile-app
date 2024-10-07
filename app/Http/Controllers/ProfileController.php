<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function getAllProfiles()
   {
       $profiles = Profile::all();
       return view('profiles', ['profiles' => $profiles]);//kinukuha lahat ng user and nirereturn lahat ng user, and display sa template
   }

   public function show($id)
   {
    $profile = Profile::find($id);
    if(!$profile){
        return abort(404);
    }
    return view('show', compact ('profile'));
   }
}
