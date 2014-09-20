@extends('master')

@section('title')
{{ $post->title }}
@stop

@section('main-content')
<h1>{{ $post->title }}</h1>
<article>{{ $post->content }}</article>
@stop