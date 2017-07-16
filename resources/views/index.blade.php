@extends('layouts.app')

@section('title', 'Home')

@section('content')

@endsection

@section('scripts')
   <script>
        var typed = new Typed('.typing', {
            strings: ["Matthew Fortier.", "Web Developer.", "...full stack.", "Aspiring Designer", "Code", "Tech", "Oppinions", "Thoughts", "\\newline"],
            typeSpeed: 30,
            cursorChar: '_'
        });
   </script>
@endsection