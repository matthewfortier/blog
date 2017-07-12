@extends('../layouts.app')

@section('title', 'All Posts')

@section('content')

    @foreach ($posts as $post)
    
        <h2>{{ $post["title"] }}</h2>
        <div>{!! html_entity_decode($post["body"]); !!}</div>

    @endforeach

@endsection