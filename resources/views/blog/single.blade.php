@extends('../layouts.app')

@section('title', $post["title"])

@section('content')

    <div class="page-content">
        <div class="left"></div>
        <div class="post-single-body">
            <h1 id="post-single-title">{{ $post["title"] }}</h1>
            <img src="{{ asset('img/hero.png') }}" alt="">
            <div class="markdown">
                {!! html_entity_decode($post["body"]); !!}
            </div>
        </div>
        <div class="right"></div>
    </div>

@endsection