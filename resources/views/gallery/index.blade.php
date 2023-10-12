@extends('layouts.master')
@section('title') {{'Gallery'}} @endsection
@section('content')
    <div class="container">
      <div class="row">
          <div class="col-md-5 mx-auto"> 
                <form action="{{route('music.search')}}" method="GET">
                  <div class="input-group mb-3">
                    <input type="search" name="search" class="form-control" placeholder="Search Songs" aria-label="search" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fa fa-search"></i></button>
                  </div> 
                </form>
          </div>
      </div> 
    </div>
    <div class="container">
        @if(count($categories) == 0)
         <h3 class="text-danger text-center mt-4">No Songs Available</h3>
        @else
        <div class="row">
          @foreach($categories as $category)
            <div class="col-md-4">
              <div class="card mt-4" style="width: 18rem;">
                  <video >
                      <source src="{{Storage::url($category->music_name)}}" type="video/mp4">
                    </video>
                  <div class="card-body">
                    <h4 class="card-title">Singer: {{$category->artist}}</h4>
                    <h5 class="card-title">{{\Illuminate\Support\Str::limit($category->name,"20")}}</h5>
                    <p class="card-text">{{\Illuminate\Support\Str::limit($category->description,"10")}}</p>
                    <a href="{{route('music.watch',$category->id)}}" class="btn btn-primary btn-block">Watch</a>
                  </div>
                </div>
            </div>
            @endforeach
        </div>
          @endif
    </div>
@endsection