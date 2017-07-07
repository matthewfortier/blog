<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
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
				<span id="name-text">newline<span class="cursor">_</span></span>
				<span id="name-first">by Matthew Fortier</span>
			</a>
       </div>
	   <div class="navigation">
	   		<a href="/posts">
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
    </nav>
    <div class="container">
        @yield('content')
    </div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="{{ asset('js/all.js') }}"></script>
	@yield('scripts')
  </body>
</html>