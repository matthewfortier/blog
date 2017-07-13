<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta name="google-site-verification" content="OzuhB6KSXLO53pEUSavapnt2VpjaJqjhJp8SdVJlBgk" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Matthew Fortier Blog - @yield('title')</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <nav>
       <div class="logo">
	   		<div class="logo-text">
			   <span>\n</span>
			</div>
			<a href="/" class="logo-name">
				<span id="name-text">\newline<span class="cursor">_</span></span>
				<span id="name-first">by Matthew Fortier</span>
			</a>
       </div>
	   <div class="navigation">
	   		<a id="blog-link" href="/blog">
			   <div class="link">
					<span></span>
					<li>Blog</li>
					<span></span>   
				</div>
			</a>
			<a href="/">
			   <div class="link">
					<span></span>
					<li>Projects</li>
					<span></span>   
				</div>
			</a>
			<a href="/contact">
			   <div class="link">
					<span></span>
					<li>Contact</li>
					<span></span>   
				</div>
			</a>
			<a href="/about">
			   <div class="link">
					<span></span>
					<li>About Me</li>
					<span></span>   
				</div>
			</a>
	   </div>
	   <div class="links">
	   		<i class="mdi mdi-linkedin"></i>
			<i class="mdi mdi-bell"></i>
			<i class="mdi mdi-bell"></i>
	   </div>
    </nav>
	
	@include('partials.blog-sidebar')

    <div class="container">
        @yield('content')
    </div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="{{ asset('js/all.js') }}"></script>
	<script>
		$('#blog-link').mouseover(function(){
			$('.blog-sidebar').removeClass("leave").addClass("out");
		});

		$('.link').mouseover(function(){
			$('.blog-sidebar').removeClass("out").addClass("leave");
		});
	</script>
	@yield('scripts')
  </body>
</html>
