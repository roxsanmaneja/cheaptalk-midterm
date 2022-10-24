@section('mytitle', '| Register')

@extends('base')

@section('content')

<div class="row mt-5">
    <div class="col-md-4 offset-md-4">
        <div class="card mb-3 shadow-lg">
            <div class="card-header text-info text-center" >
                <h3 class="card-title font-weight-dark mt-2"> User Registration</h3> <hr>
            </div>
            <div class="card-body shadow-sm" style="background-color: rgb(44, 54, 57, 0.4)">
                {!! Form::open(['url'=>'/register', 'method'=>'post']) !!}
                    <div class="form-group _auth @error('name') has-error @enderror">
                        {!! Form::label('name',' Name',[],false) !!}
                        {!! Form::text('name', null, ['class'=>'form-control']) !!}
                        <span class="errspan" id="errspan">{{ $errors->first('name') }}</span>
                    </div>
                    <div class="form-group _auth @error('sex') has-error @enderror">
                        {!! Form::label('sex',' Gender',[],false) !!}
                        {{Form::select('sex', [
                            'Male' => 'Male',
                            'Female' => 'Female',
                        ], null, ['class'=>'form-control form-select'])}}
                        <span class="errspan" id="errspan">{{ $errors->first('sex') }}</span>
                    </div>
                    <div class="form-group _auth @error('email') has-error @enderror">
                        {!! Form::label('email',' Email',[],false) !!}
                        {!! Form::text('email', null, ['class'=>'form-control']) !!}
                        <span class="errspan" id="errspan">{{ $errors->first('email') }}</span>
                    </div>
                    <div class="form-group _auth @error('password') has-error @enderror">
                        {!! Form::label('password', ' Password',[],false) !!}
                        {!! Form::password('password', ['class'=>'form-control']) !!}
                        <span class="errspan" id="errspan">{{ $errors->first('password') }}</span>
                    </div>
                    <div class="form-group _auth @error('password_confirmation') has-error @enderror">
                        {!! Form::label('password_confirmation', ' Confirm Password',[],false) !!}
                        {!! Form::password('password_confirmation', ['class'=>'form-control']) !!}
                        <span class="errspan" id="errspan">{{ $errors->first('password_confirmation') }}</span>
                    </div>
                    <div class="form-group text-center text-warning">
                        <button class="btn btn-outline-primary" onclick="btnload()" id="actionBtn" type="submit"> Submit now </button>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@stop
