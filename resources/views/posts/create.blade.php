@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/posts" enctype="multipart/form-data" method="post">
            @csrf

            <div class="col-8 offset-2">
                <div class="row pl-3"><h1>Add New Post</h1></div>
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label text-md-left">Caption</label>

                    <div class="col-md-10">
                        <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror"
                               name="caption" value="" autocomplete="caption" autofocus>

                        @error('caption')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">

                    <label for="image" class="col-md-4 col-form-label text-md-left">Image</label>
                    <input type="file" class="col-md-10" class="form-control-file" id="image" name="image">
                    @error('image')

                    <strong>{{ $message }}</strong>
                    @enderror
                </div>
                <div class="row pl-3 pt-3">
                    <button class="btn btn-primary">Add New Post</button>
                </div>
            </div>
        </form>
    </div>
@endsection

