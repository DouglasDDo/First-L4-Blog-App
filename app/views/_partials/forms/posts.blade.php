<div>
	<p>{{ Form::label('title', 'Title: ') }}</p>
	<p>{{ Form::text('title') }}</p>
</div>
<div>
	<p>{{ Form::label('content', 'Content: ') }}</p>
	<p>{{ Form::textarea('content') }}</p>
</div>
<div>
	<p>{{ Form::submit(isset($buttonText)? $buttonText : 'Create a New Post') }}</p>
</div>