@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1>Matthew Fortier</h1>

    @foreach ($posts as $post)

        <h2>{{ $post["title"] }}</h2>
        <p>{{ $post["body"] }}</p>
        <br>

    @endforeach
@endsection