@extends('master')

@section('title')
{{'Login'}}
@stop

@section('main-content')
	{{Form::open(['action' => 'UserController@login'])}}
		@include('_partials.forms.users')
	{{Form::close()}}
@stop