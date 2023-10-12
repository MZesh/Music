@extends('layouts.master')
@section('title') {{'Upload'}} @endsection
@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if(Session::has('alert-success'))
                <span class="text-success text-center"><strong>{{Session::get('alert-success')}}</strong></span>
                @elseif(Session::has('alert-danger'))
                <span class="text-danger text-center"><strong>{{Session::get('alert-danger')}}</strong></span>
                @endif
                <div class="card-header">{{ __('Upload Music') }}</div>

                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="{{ route('music.uploadmusic') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Music Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="artist" class="col-md-4 col-form-label text-md-end">{{ __('Artist Name') }}</label>

                            <div class="col-md-6">
                                <input id="artist" type="text" class="form-control @error('artist') is-invalid @enderror" name="artist" value="{{ old('artist') }}" required placeholder="Singer/Player">

                                @error('artist')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3"> 
                            <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('description') }}</label>

                            <div class="col-md-6">
                                <textarea id="description" class="form-control @error('phone') is-invalid @enderror" name="description">{{ old('description') }}</textarea>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="uploaded_by" class="col-md-4 col-form-label text-md-end">{{ __('Uploaded by') }}</label>

                            <div class="col-md-6">
                                <input id="uploaded_by" type="text" class="form-control @error('uploaded_by') is-invalid @enderror" value="{{ old('uploaded_by') }}"  name="uploaded_by" required >

                                @error('uploaded_by')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="music_name" class="col-md-4 col-form-label text-md-end">{{ __('Attach Music') }}</label>

                            <div class="col-md-6">
                                <input id="music_name" type="file" class="form-control" name="music_name" required >
                               
                                @error('music_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="category" class="col-md-4 col-form-label text-md-end">{{ __('Category') }}</label>

                            <div class="col-md-6">
                                <select class="form-select" name="category" aria-label="Default select example">
                                    <option value="Song">Song</option>
                                    <option value="Instrumental">Instrumental</option>
                                    <option value="audio">Audio</option>
                                  </select>
                                @error('category')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Upload') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 