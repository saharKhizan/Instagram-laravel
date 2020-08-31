@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-8 offset-2">
                    <div>
                        <h1>Edit Profile</h1>
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-md-2 col-form-label text-md-left">Title</label>

                        <div class="col-md-8">
                            <input id="title" type="text"
                                   class="form-control @error('title') is-invalid @enderror"
                                   name="title"
                                   value="{{ old('title') ?? $user->profile->title }}" autocomplete="title" autofocus>

                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-md-2 col-form-label text-md-left">Description</label>

                        <div class="col-md-8">
                            <input id="description" type="text"
                                   class="form-control @error('description') is-invalid @enderror"
                                   name="description"
                                   value="{{ old('description') ?? $user->profile->description }}"
                                   autocomplete="description" autofocus>

                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="url" class="col-md-2 col-form-label text-md-left">URL</label>

                        <div class="col-md-8">
                            <input id="url" type="text"
                                   class="form-control @error('url') is-invalid @enderror"
                                   name="url"
                                   value="{{ old('url') ?? $user->profile->url }}" autocomplete="url" autofocus>

                            @error('url')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row pt-3">
                        <label for="image" class="col-md-2 col-form-label text-md-left">Profile Image</label>

                        <div class="col-md-8">
                            <input type="file" class="form-control-file" id="image" name="image">

                            @error('image')
                            <strong>{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>

                    <div class="row pt-3">
                        <div class="col-md-6">
                            <button class="btn btn-primary">Save Profile</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
