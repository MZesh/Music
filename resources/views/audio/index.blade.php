@extends('layouts.master')
@section('title') {{'Audio'}} @endsection
@section('content')
<div class="container">
  <div class="row">
      <div class="col-md-5 mx-auto"> 
            <form action="{{route('music.searchAudio')}}" method="GET">
              <div class="input-group mb-3">
                <input type="search" name="search" class="form-control" placeholder="Search Audio Songs" aria-label="search" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fa fa-search"></i></button>
              </div> 
            </form>
      </div>
  </div> 
</div>
<div class="container">
    @if(count($audios) == 0)
     <h3 class="text-danger text-center mt-4">No Audio  Available</h3>
    @else
    <div class="row">
      @foreach($audios as $audio)
        <div class="col-md-3">
            <div class="card mt-4" style="width: 18rem;"> 
                <div class="card-body">
                    <audio controls class="audio">
                      <source src="{{Storage::url($audio->music_name)}}" > 
                    </audio>  
                      <strong class="card-title">Song: {{$audio->name}}</strong>
                      <p class="card-text">{{\Illuminate\Support\Str::limit($audio->description,"25")}}</p>
                      <h5 class="card-title">Singer: {{$audio->artist}}</h5>
                </div>
              </div>
        </div>
        @endforeach
    </div>
      @endif
</div>
@endsection