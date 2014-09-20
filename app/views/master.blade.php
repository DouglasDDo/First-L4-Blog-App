<!doctype html>
<html lang="en">
<head>
<!-- Meta Info -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!-- CSS -->
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
  {{ HTML::style('assets/css/skullblog.css') }}
<!-- HTML5 shiv -->
  <!--[if lt IE 9]>
      <script type="text/javascript"
          src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
      </script>
  <![endif]-->
<!-- Fonts -->
<link href='http://fonts.googleapis.com/css?family=Creepster|Questrial|Bevan|Roboto+Slab' rel='stylesheet' type='text/css'>
  <title>Skulldouggery | @yield('title')</title>
</head>

<body>
  <div class="container">
    <a href="#" data-toggle=".header, .content-wrapper, .main-content, .sidebar-wrapper, .sidebar-toggle" class="sidebar-toggle btn-lg"><i class="glyphicon glyphicon-align-justify"></i></a>
<!-- Sidebar -->
    <div class="sidebar-wrapper">
      @include('_partials.sidebar')
    </div>
<!-- Content -->
      <div class="header">
          <p>Skulldouggery</p>
      </div>
    <div class="content-wrapper">
  <!-- Header -->

  <!-- Main Content -->
      <div class="main-content">

        @if (Session::get('flash_message'))
          <div class="alert alert-info">
            {{ Session::get('flash_message') }}
          </div>
        @endif

        @yield('main-content')
      </div>
  <!-- Footer -->
      <footer>

      </footer>
    </div>
  </div>
<!-- JS added at the end to make page load faster -->
<!-- Bootstrap JS Core & jQuery -->
  	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
  	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<!-- Custom JS & jQuery -->
    <script>
      $(document).ready(function() {
        $("[data-toggle]").click(function() {
          var toggle_el = $(this).data("toggle");
          $(toggle_el).toggleClass("active");
        });
      });
    </script>
    <script>
      $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
            || location.hostname == this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }
          }
        });
      });
    </script>
</body>
</html>