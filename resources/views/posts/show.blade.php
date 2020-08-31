@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row p-3 mt-5 shadow col-8 offset-2">
            <div class="col-4">
                <img src="/storage/{{ $post->image }}" class="w-100">
            </div>
            <div class="col-4">
                <div class="d-flex align-items-center">
                    <div>
                        <a href="/profile/{{ $post->user->id }}">
                            <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-100"
                                 style="max-width: 40px">
                        </a>
                    </div>
                    <div class="pl-3">
                        <a href="/profile/{{ $post->user->id }}">
                            <span class="font-weight-bold text-dark"> {{ $post->user->username }}</span>
                        </a>
                    </div>
                    <div class="pl-3">
                        <a href="#">follow</a>
                    </div>
                </div>
                <div class="pt-3 d-flex ">
                    <a href="/profile/{{ $post->user->id }}" class="pr-2">
                        <span class="font-weight-bold text-dark"> {{ $post->user->username }}</span>
                    </a>
                    <p> {{ $post->caption }}</p>
                </div>
            </div>

            <div class="col-2"></div>
        </div>


    </div>
@endsection

