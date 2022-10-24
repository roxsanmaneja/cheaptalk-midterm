@extends('base')

@section('mytitle', "| Authors")

@section('content')
    <h1 class="font-weight-dark text-dark mb-4 mt-3"> Authors </h1> <hr>
    <div class="container p-3 rounded dashcon mt-3 mb-3" style="background-color: rgb(253, 238, 220, 0.2)">
        <div class="container d-flex flex-wrap justify-content-center">
            @foreach($users as $user)
            @include('partials.user-card')
            @endforeach
        </div>
    </div>
@endsection
