@extends('base')

@section('mytitle', "| " . e($user->name))

@section('content')
    <h1 class="font-weight-dark text-white mb-4 mt-3"> Posts by: {{$user->name}}</h1> <hr>
    <div class="container p-3 rounded dashcon mt-3 mb-3" style="background-color: rgb(253, 238, 220, 0.2)">
        @if ($posts->isEmpty())
        <div class="p-3 rounded font-weight-dark text-light"><div class="display-4"><img src="https://cdn-icons-png.flaticon.com/512/753/753345.png" width="100" height="100" class="rounded"> NO POST </div></div>
        @endif
        @foreach($posts as $post)
        @include('partials.post-card')
        @endforeach
    </div>
@endsection
