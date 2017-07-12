@extends('../layouts.app')

@section('title', 'Archive')

@section('content')

    <div>
    
        @foreach ($posts as $post)
        
            <h2>{{ $post["title"] }}</h2>
            <div>{!! html_entity_decode($post["body"]); !!}</div>

        @endforeach

    </div>
    
    {{ $posts->links() }}

@endsection