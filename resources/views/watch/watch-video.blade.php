@extends('layouts.master')
@section('title') {{'Watch'}} @endsection
@section('content')
 
    <div class="container">
       
        <div class="row"> 
            <div class="col-md-8">
              <div class="card mt-4 mx-auto" >
                <video controls>
                    <source src="{{Storage::url($videos->music_name)}}"  type="video/mp4">
                  </video>
                  <div class="card-body">
                    <h4 class="card-title">Singer: {{$videos->artist}}</h4>
                    <h5 class="card-title">{{$videos->name}}</h5>
                    <p class="card-text">{{$videos->description}}</p> 
                  </div>
                </div>
            </div> 
            @foreach($categories as $category)
            <div class="col-md-4">
                <h4>Related Videos</h4>
                <a href="{{route('music.watch',$category->id)}}" class="related-items">
                <div class="card mt-4" style="width: 18rem;">
                        <video >
                            <source src="{{Storage::url($category->music_name)}}" type="video/mp4">
                            </video>
                        <div class="card-body">
                            <h4 class="card-title">Singer: {{$category->artist}}</h4>
                            <h5 class="card-title">{{\Illuminate\Support\Str::limit($category->name,"20")}}</h5>
                            <p class="card-text">{{\Illuminate\Support\Str::limit($category->description,"10")}}</p>
                            
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div> 
    </div>
@endsection