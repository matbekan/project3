@extends('layouts.app')

@section('content')
<div class="container">
   <form action="/profile/{{ $user->id}}" enctype="multipart/form-data" method="post">
    @csrf
    @method('PATCH')
    <div clas="row">
            <h1> Edit Profile</h1>
    </div>
        <div class=".col-8.offset-2">
              <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label text-md-right pt-3">Title</label>
                        <div class="col-md-6">
                              <input id="title" 
                              type="text" class="form-control @error('title') is-invalid @enderror" 
                              name="title"
                              value="{{ old('title') ?? $user->profile->title }}"  autofocus> <!--when you fail validation and you come back you expect that this filed will be will be fullfiled with the data you enter-->
                              @error('name')
                              <span class="invalid-feedback" role="alert">
                                     <strong>{{ $title }}</strong>
                              </span>
                               @enderror
                        </div>
                </div>

                 <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label text-md-right pt-3">Description</label> <div class="col-md-6">
                              <input id="description" 
                              type="text" class="form-control @error('description') is-invalid @enderror" 
                              name="description"
                              value="{{ old('description') ?? $user->profile->description }}"  autofocus>
                              @error('name')
                              <span class="invalid-feedback" role="alert">
                                     <strong>{{ $description }}</strong>
                              </span>
                               @enderror
                        </div> 
                </div>

                  <div class="form-group row">
                    <label for="url" class="col-md-4 col-form-label text-md-right pt-3">URL</label>
                        <div class="col-md-6">
                              <input id="url" 
                              type="text" class="form-control @error('url') is-invalid @enderror" 
                              name="url"
                              value="{{ old('url') ?? $user->profile->url }}"  autofocus>
                              @error('name')
                              <span class="invalid-feedback" role="alert">
                                     <strong>{{ url }}</strong>
                              </span>
                               @enderror
                        </div>
            
                    <label for="image"  class="col-md-4 col-form-label text-md-right">Profile Image</label>
                    <input type="file" class="col-md-6" id="image" name="image">

                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $image }}</strong>
                            </span>
                         @enderror
                </div> 
                   <button class="btn btn-primary" style="float:right"> Save Profile </button>             
      </div>
    </div>
   </div>
  </form>
</div>
@endsection