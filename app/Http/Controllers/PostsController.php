<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
  public function __construct()
  {
   $this->middleware('auth');   //no one can pass trough without login
  }

  public function create() 
  {

  	return view('posts.create');

  }

  public function store()

  {
  	//first step is to validate request
  	$data = request()->validate([
   //   'another' => '', pass trough empty string
  		'caption' => 'required',
  		'image' => ['required', 'image'],

  	]);

    $imagePath = request('image')->store('uploads', 'public'); 


//all will be saved in storage->public->uploads directory, after that artisan command storage:link http://127.0.0.1:8000/storage/uploads/C6p0ckD992NJgCo3xdhoyhbIklPqw8eTL30pSiVm.jpeg
  	 $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200); //method in intervention class   determines width and height
     $image->save();

    //getting autenthicated user
   //  auth()->user()->posts()->create($data);

    auth()->user()->posts()->create([
      'caption' => $data['caption'], //key->value
      'image' => $imagePath,
    ]);


    return redirect('/profile/' . auth()->user()->id);

    //\App\Post::create($data);

    //$post = new \App\Post(); 
   // $post->caption = $data['caption']; //storing values
    //$post->save();

  	 //dd(request()->all()); //give data we are proccesing within request, 

}



     public function show(\App\Post $post) 

    {

      return view('posts.show', [
        'post' => $post, ]); //or use function compact('post') post=field

    } 


  }


