@extends('../layouts.app')

@section('title', $post["title"])

@section('content')
    
    <h2>{{ $post["title"] }}</h2>
    <div>{!! html_entity_decode($post["body"]); !!}</div>

@endsection