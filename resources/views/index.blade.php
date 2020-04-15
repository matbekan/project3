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
            <a href="#"> Add new Post </a>
          </div>
          <div class="d-flex ">
              <div class="pr-5"><strong>70</strong> posts</div>
              <div class="pr-5"><strong>350</strong> followers</div>
              <div class="pr-5"><strong>43</strong> following</div>
            </div>
          <div style="font-weight: bold;"> {{$user->profile->title}} </div> 
          <div>{{$user->profile->description}}</div>  
            <div> <a href="">{{$user->profile->url}} </a></div>
        </div>
    </div>

    <div class="row pt-4">
   
    <div class="col-4">
        <img src="https://instagram.fzag1-1.fna.fbcdn.net/v/t51.2885-15/e35/p1080x1080/79451222_178425050220640_6191673722039237946_n.jpg?_nc_ht=instagram.fzag1-1.fna.fbcdn.net&amp;_nc_cat=1&amp;_nc_ohc=o680_9cBOT4AX8znO7R&amp;oh=b2150cca93a20cb362502b9f75005a16&amp;oe=5EA31BED" class="w-100"  class="w-100" alt ="">
    </div>
     <div class="col-4">
        <img src="https://instagram.fzag1-1.fna.fbcdn.net/v/t51.2885-15/e35/p1080x1080/80790655_858731067894954_2754785002038133632_n.jpg?_nc_ht=instagram.fzag1-1.fna.fbcdn.net&amp;_nc_cat=1&amp;_nc_ohc=40nwW2zhdjsAX-bg0m8&amp;oh=8aef2b7abd1e8327f664aca18a278813&amp;oe=5EB48E98" class="w-100" alt ="">
    </div>
     <div class="col-4">
        <img src="https://instagram.fzag1-1.fna.fbcdn.net/v/t51.2885-15/e35/p1080x1080/75441001_2406766736118672_6017065373233853009_n.jpg?_nc_ht=instagram.fzag1-1.fna.fbcdn.net&amp;_nc_cat=1&amp;_nc_ohc=0s_cMA2yH-AAX-NlS_d&amp;oh=8ef5f359698cf963701a373c1e439908&amp;oe=5EAFE003" class="w-100" alt ="">
    </div>
</div>
    <div class="row pt-4">
    <div class="col-4">
        <img src="https://instagram.fzag1-1.fna.fbcdn.net/v/t51.2885-15/e35/p1080x1080/75439563_570707910160603_1114247926074791034_n.jpg?_nc_ht=instagram.fzag1-1.fna.fbcdn.net&amp;_nc_cat=1&amp;_nc_ohc=Mg2yvSNxZ0oAX--eI16&amp;oh=30dfb44fb544dede2a5416c9bb999074&amp;oe=5E9316C5" class="w-100"  class="w-100" alt ="">
    </div>
     <div class="col-4">
        <img src="https://instagram.fzag1-1.fna.fbcdn.net/v/t51.2885-15/e35/p1080x1080/82351020_207356706952719_4289395363508504204_n.jpg?_nc_ht=instagram.fzag1-1.fna.fbcdn.net&_nc_cat=1&_nc_ohc=97IPevDNEXIAX9x9BuC&oh=1018fe64fd3a4c9b8622016f17fd2c70&oe=5EA95B41" class="w-100" alt ="">
    </div>
     <div class="col-4">
        <img src="https://instagram.fzag1-1.fna.fbcdn.net/v/t51.2885-15/e35/p1080x1080/79718411_299996624232730_3310429563226660584_n.jpg?_nc_ht=instagram.fzag1-1.fna.fbcdn.net&_nc_cat=1&_nc_ohc=vBUGZYhq5poAX94WUVa&oh=339f82fa5a9bb31368b6da1b3ce1c73e&oe=5EA33ED7" class="w-100" alt ="">
    </div>
</div>
</div>
@endsection
