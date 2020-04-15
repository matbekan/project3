@extends('layouts.app')

@section('content')
<div class="container">
  <form action="/p" enctype="multipart/form-data" method="post">
    @csrf
    <div clas="row">
            <h1> Add New Post</h1>
    </div>
        <div class=".col-8.offset-2">
              <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label text-md-right pt-3">Post Caption</label>
                        <div class="col-md-6">
                              <input id="caption" 
                              type="text" class="form-control @error('caption') is-invalid @enderror" 
                              name="caption"
                              value="{{ old('caption') }}"  autofocus>
                              @error('name')
                              <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                              </span>
                               @enderror
                        </div>
            
                    <label for="image"  class="col-md-4 col-form-label text-md-right">Post Image</label>
                    <input type="file" class="col-md-6" id="image" name="image">


                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $image }}</strong>
                            </span>
                         @enderror
                
      </div>
                       <div class="row pt-4">
                        <div class="col-md-4">
                           <button class="btn btn-primary pull-right"> Add new Post </button>
                       </div>
                     </div>
                 
    </div>
  </div>




</div>
</form>
@endsection
