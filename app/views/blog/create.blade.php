@extends('master')

@section('title')
{{'New Post'}}
@stop

@section('main-content')
	{{Form::open(['route' => 'blog.store'])}}
		@include('_partials.forms.posts')
	{{Form::close()}}
@stop