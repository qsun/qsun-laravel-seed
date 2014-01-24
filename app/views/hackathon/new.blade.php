@extends('layouts.master')

@section('title')
  Add new Hackathon
@stop

@section('content')
  {{ Form::model($hackathon, array('action' => 'HackathonController@createHackathon')) }}
  {{ Form::token() }}

  {{ Form::label('title', 'Title') }} {{ Form::text('title') }}<br />
  {{ Form::label('seo_url', 'SEO URL') }} {{ Form::text('seo_url') }}<br />
  {{ Form::label('description', 'Description') }} {{ Form::textarea('description') }}<br />
  {{ Form::label('location', 'Location') }} {{ Form::text('location') }}<br />
  {{ Form::label('category_id', 'Category') }} {{ Form::select('category_id', array('1' => 'Internet & Website', '2' => 'Creativity Work', '3' => 'Hardware Hackathon')) }}<br />
  {{ Form::label('availability', 'Available to') }} {{ Form::text('availability') }}<br />
  {{ Form::label('contact', 'Contact') }} {{ Form::text('contact') }}<br />
  {{ Form::label('website', 'Website') }} {{ Form::text('website') }}<br />

  {{ Form::submit("Create") }}

  {{ Form::close() }}
@stop
