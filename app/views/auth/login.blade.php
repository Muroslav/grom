@extends('layouts.start')
@section('content')

  <h1>Please Log in</h1>
  {{ Form::open() }}
  <li>{{ Form::label('email', 'E-Mail Address') }}</li>
  <li>{{ Form::text('email') }}</li>
  <li>{{ Form::label('password', 'Password') }}</li>
  <li>{{ Form::password('password') }}</li>
  <li>{{ Form::submit('Login') }}
  {{ Form::close() }}
 @stop