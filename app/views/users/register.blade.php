@extends('layouts.master')

@section('title')
Register new account
@stop

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <h1>Register new account</h1>

      {{ Form::open(array('url'=>'users/create', 'class'=>'')) }}
      <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>

      <div class="form-group">
        {{ Form::label('email', 'Email address') }}
        {{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Email Address')) }}
      </div>

      <div class="form-group">
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password')) }}
      </div>

      <div class="form-group">
        {{ Form::label('password_confirmation', 'Password Confirmation') }}
        {{ Form::password('password_confirmation', array('class'=>'form-control', 'placeholder'=>'Password Confirmation')) }}
      </div>
      {{ Form::submit('Register', array('class'=>'btn btn-large btn-primary'))}}
      {{ Form::close() }}
    </div>
    <div class="col-md-6">
      &nbsp;
    </div>
  </div>
</div>
@stop
