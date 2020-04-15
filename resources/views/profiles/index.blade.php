@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
    <div class="col-3 p-5">
        <img src="https://is3-ssl.mzstatic.com/image/thumb/Purple127/v4/f5/ca/fd/f5cafd96-f3a4-8ec1-37b0-2e82f8bdea77/source/512x512bb.jpg" alt="" class="rounded-circle" style="width:150px;height: 150px">
    </div>
        <div class="col-9 pt-5">
          <div class="d-flex justify-content-between align-items-baseline"> 
            <h1> {{$user -> username }} </h1>
             @can ('update', $user->profile) 
            <a href="/profile/{{$user->id}}/edit"> Edit Profile </a>
            @endcan
            <a href="/p/create"> Add new Post </a>

          </div>

          <div class="d-flex ">
              <div class="pr-5"><strong>{{$user->posts->count()}}</strong> posts</div>
              <div class="pr-5"><strong>350</strong> followers</div>
              <div class="pr-5"><strong>43</strong> following</div>
            </div>
          <div style="font-weight: bold;"> {{$user->profile->title}} </div> 
          <div>{{$user->profile->description}}</div>  
            <div> <a href="">{{$user->profile->url}} </a></div>
        </div>
  </div>
     <div class="row">
      @foreach($user->posts as $post)
        <div class="col-lg-4 col-md-4 col-xs-12" style="display:flex;">
          <a href="/p/{{ $post->id }}">
            <img src="/storage/{{ $post->image }}" class="w-100" style="padding:15px;"; alt ="">
         </div>
        @endforeach
      </div>
    </div>
</div>
@endsection