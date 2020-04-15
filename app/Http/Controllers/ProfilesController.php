<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User; 
use Intervention\Image\Facades\Image;


class ProfilesController extends Controller
{
     public function index($user)
    {
    	$user = User::findOrFail($user); //finding the user with specific username , here you can get erorr 404 with function findorfail

        return view ('profiles.index', ['user' => $user, ]);
    }

     public function edit(User $user)
     {
     	$this->authorize('update', $user->profile);
     	return view ('profiles.edit', compact('user'));

     }

     public function update(User $user)
     {

     	$this->authorize('update', $user->profile);

     	 $data = request()->validate ([
     	'title' => 'required',
     	'description' => 'required',
     	'url' => 'url',
     	'image' => '',

		]);
//auth means you are only caching authenticated user, only users who are loged in can change data in their profile
      //INFO WE HAVE HERE IS FOR THE PROFILE, USER UPDATE ALL THESE FIELDS THAT ARE BEING PASSED IN

     	if(request('image')) 
     	{
     		$imagePath = request('image')->store('profile', 'public');

     		$image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);
     		$image->save();
     	}

     	dd($data);

     	auth()->user()->profile->update(array_merge(
     		$data,	
     		['image' => $imagePath]
     	)); 

     	return redirect("/profile/{$user->id}");
     }
}

//2.58 H
//pulled controller from web.php
//connected with user.php 
//dd(\App\User::find($user)); RETURNS NULL because the user (from url) is not a real user 
// insert 1 in url returns user data from the DB
//pasing data into the view with array, inside the home.blade we can put user variable