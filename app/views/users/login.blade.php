@extends('layouts.master')

@section('title')
Login
@stop

@section('content')
  <div class="container">
    <h1>Login</h1>

    {{ Form::open(array('url' => 'users/login', 'class' => '')) }}
    <div class="form-group">
      {{ Form::label('email', 'Email') }}
      {{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'Email')) }}
    </div>

    <div class="form-group">
      {{ Form::label('password', 'Password') }}
      {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password')) }}
    </div>

    {{ Form::submit('Login', array('class' => 'btn btn-success')) }}
    {{ Form::close() }}
  </div>
@stop
