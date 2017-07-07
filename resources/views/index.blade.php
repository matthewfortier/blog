@extends('layouts.app')

@section('title', 'Home')

@section('content')
    
    <div class="index-container">
        <div class="typing"></div>        
    </div>

@endsection

@section('scripts')
   <script>
        var typed = new Typed('.typing', {
            strings: ["Matthew Fortier.", "Web Developer.", "..full stack.", "Aspiring Designer", "Opinions", "Code", "Tech", "Thoughts", "\\newline"],
            typeSpeed: 30,
            cursorChar: '_'
        });
   </script>
@endsection