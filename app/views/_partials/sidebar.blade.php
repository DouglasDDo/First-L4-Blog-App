<ul>
  <li><a href="/"><i class="glyphicon glyphicon-home"></i>Home</a></li>
  <li><a href="/about"><i class="glyphicon glyphicon-info-sign"></i>About</a></li>
  <li><a href="/blog"><i class="glyphicon glyphicon-pencil"></i>Blog</a></li>
  <li><a href="/projects"><i class="glyphicon glyphicon-briefcase"></i>Projects</a></li>
  <li><a href="/contact"><i class="glyphicon glyphicon-user"></i>Contact</a></li>
  @if(Auth::user())
	<li><a href="/logout"><i class="glyphicon glyphicon-log-out"></i>Logout</a></li>
  @else
	<li><a href="/login"><i class="glyphicon glyphicon-log-in"></i>Login</a></li>
  @endif
</ul>