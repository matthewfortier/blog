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

  	@include("partials._header")
    
    <div class="container">
        @yield('content')
    </div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="{{ asset('js/all.js') }}"></script>
	@yield('scripts')
  </body>
</html>
