@extends('master')

@section('title')
{{'Blog'}}
@stop

@section('main-content')
	@if(Auth::user())
		{{ Form::open(['method' => 'GET', 'route' => 'blog.create']) }}
			{{ Form::submit('Create New Post') }}
		{{ Form::close() }}
	@endif

    @foreach($posts as $post)
            <div id='post-title'>
                    {{ link_to_route('blog.show', $post->title, $post->id) }}
            </div>
            @if(Auth::user())
				<div>
					{{ Form::open(['method' => 'GET', 'route' => ['blog.edit', $post->id]]) }}
						{{ Form::submit('Edit Post') }}
					{{ Form::close() }}

					{{ Form::open(['method' => 'DELETE', 'route' => ['blog.delete', $post->id]]) }}
						{{ Form::submit('Delete Post') }}
					{{ Form::close() }}
				</div>
            @endif
    @endforeach

	<div>
    	{{ $posts->links(); }}
	</div>
@stop