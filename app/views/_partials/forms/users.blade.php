<div>
	<p>{{ Form::label('username', 'Username: ') }}</p>
	<p>{{ Form::text('username') }}</p>
</div>
<div>
	<p>{{ Form::label('email', 'Email: ') }}</p>
	<p>{{ Form::text('email') }}</p>
</div>
<div>
	<p>{{ Form::label('password', 'Password: ') }}</p>
	<p>{{ Form::password('password') }}</p>
</div>
<div>
	<p>{{ Form::submit(isset($buttonText)? $buttonText : 'Sign In') }}</p>
</div>