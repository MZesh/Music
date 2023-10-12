@extends('layouts.master')
@section('title') {{'Home'}} @endsection
@section('content')
    <!-- Hero -->
    <div class="p-5 text-center bg-image rounded-3" style="
        background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/041.webp');
        height: 400px;
        ">
        <div class="mask" >
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white">
                    <h1 class="mb-3">Some Overview of Chitrali Music</h1>
                    <h4 class="offset-1 mb-3 ">The music of Chitral or Khowar consists of melodies based on lyrics, which have either been written or composed for specific individuals and occasions.<br>
                                                 It is very difficult to reduce these melodic structures to their basic modes because the scale of which the Chitrali sithar is a good conductor, is not a<br>
                                                 tempered one. As in most of the modes primarily used for vocal music, the scale tends to be a natural one.</h4>
                    <a class="btn btn-outline-light btn-lg" href="#!" role="button">Go to Gallery</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero -->
@endsection