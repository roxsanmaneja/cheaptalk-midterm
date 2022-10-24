@section('mytitle', '| Login')

@extends('base')

@section('content')

@include('partials.info_msg')

<div class="row mt-5">
    <div class="col-md-4 offset-md-4">
        <div class="card mb-3 shadow-lg">
            <div class="card-header text-light text-center" style="background-color:rgb(254, 205, 112, 0.7)" >
                <h2 class="card-title font-weight-dark mt-2"> Login </h2> <hr>
            </div>
            <div class="card-body shadow-sm" style="background-color: rgb(44, 54, 57, 0.4)">
                {!! Form::open(['url'=>'/login', 'method'=>'post']) !!}
                    <div class="form-group _auth @error('email') has-error @enderror">
                        {!! Form::label('email','<img src="https://cdn-icons-png.flaticon.com/512/2374/2374449.png" width="25" height="25" class="rounded"> Email',[],false) !!}
                        {!! Form::text('email', null, ['class'=>'form-control']) !!}
                        <span class="errspan" id="errspan">{{ $errors->first('email') }}</span>
                    </div>
                    <div class="form-group _auth @error('password') has-error @enderror">
                        {!! Form::label('password', '<img src="https://cdn-icons-png.flaticon.com/512/807/807241.png" width="25" height="25" class="rounded"> Password',[],false) !!}
                        {!! Form::password('password', ['class'=>'form-control']) !!}
                        <span class="errspan" id="errspan">{{ $errors->first('password') }}</span>
                    </div>
                    <div class="form-group text-center mt-4">
                        <button class="btn btn-outline-success" id="actionBtn" onclick="btnload('Logging in...')" type="submit"><img src="https://cdn-icons-png.flaticon.com/512/3580/3580148.png" width="20" height="20" class="rounded"> Login</button>
                    </div>
                {!! Form::close() !!}
            </div>

        </div>
    </div>
</div>

@stop
