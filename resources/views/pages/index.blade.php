@extends('base')

@section('content')

<div class="mt-5 text-center">
<div class="container text-white pt-5">
        <h1 class="font-weight-light text-dark mt-7">Welcome to <strong> CheapTalk</strong>  <hr>
        
        @if (!Auth::check())
            <a href="{{url('/register')}}" class="btn btn-outline-info mt-5 font-weight-dark"> Register here! </a>
        @endif
    </div>
</div>
@stop
