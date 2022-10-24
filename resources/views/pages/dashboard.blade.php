@extends('base')

@section('mytitle', '| Dashboard')

@section('content')

@include('partials.info_msg')

@include('partials.create')
    <div class="text-right mt-5">
        <button class="btn-success" data-toggle="modal" data-target="#createPostModal">
             Add Post
        </button>
    </div>
    <h1 class="font-weight-dark text-white mb-2 mt-3"> Recent Post</h1> <hr>
    <div class="container p-3 dashcon rounded mb-3" style="background-color: rgb(253, 238, 220, 0.2)">
        @foreach($posts as $post)
        @include('partials.post-card')
        @endforeach
    </div>
@endsection
