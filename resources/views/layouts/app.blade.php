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
	   		<div class="spinner">
				<span></span>   
			</div>
			<div class="text">
				<span style="color: white; margin-right: -15px;">MATTHEW</span>
				<span style="color: rgba(255,255,255,.7);">FORTIER</span>
			</div>
	   </div>
	   <div class="links">
	   		<ul>
				<li class="link">
					<span></span>
					<span>Blog</span>
				</li>
				<li class="link">
					<span></span>
					<span>Portfolio</span>
				</li>
				<li class="link">
					<span></span>
					<span>Resume</span>
				</li>
				<li class="link">
					<span></span>
					<span>About Me</span>
				</li>
				<li class="link">
					<span></span>
					<span>Contact</span>
				</li>
			</ul>
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
