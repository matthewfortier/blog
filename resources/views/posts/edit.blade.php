@extends('../layouts.app')

@section('title', 'Edit Post')

@section('content')

    <h2>Edit Post</h2>

    {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}

        {{ Form::label('title', 'Title:') }}
        {{ Form::text('title', null, array('class' => 'form-control')) }}
        <br>
        {{ Form::label('body', 'Body:') }}
        {{ Form::textarea('body', null, array('class' => 'form-control')) }}
        <br>
        {{ Form::submit('Edit Post', array('class' => 'btn btn-primary')) }}

    {!! Form::close() !!}

@endsection