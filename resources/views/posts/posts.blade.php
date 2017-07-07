@extends('../layouts.app')

@section('title', 'All Posts')

@section('content')

    @foreach ($posts as $post)
    
        <h2>{{ $post["title"] }}</h2>
        <p>{{ $post["body"] }}</p>
        <br>

    @endforeach

@endsection