@extends('master')

@section('title')
{{'Edit Post'}}
@stop

@section('main-content')
	{{ Form::model($post, ['method' => 'PUT', 'route' => ['blog.update', $post->id]]) }}
		@include('_partials.forms.posts', ['buttonText' => 'Submit Edit'])
	{{ Form::close() }}

	{{ Form::open(['method' => 'GET', 'route' => ['blog.show', $post->id]]) }}
		{{ Form::submit('Cancel') }}
	{{ Form::close() }}
@stop