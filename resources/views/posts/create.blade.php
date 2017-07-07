@extends('../layouts.app')

@section('title', 'Create Post')

@section('content')

    <h2>Create Post</h2>

    {!! Form::open(['route' => 'posts.store']) !!}
        {{ Form::label('title', 'Title:') }}
        {{ Form::text('title', null, array('class' => 'form-control', 'required' => '')) }}
        <br>
        {{ Form::label('body', 'Body:') }}
        {{ Form::textarea('body', null, array('class' => 'form-control')) }}
        <br>
        {{ Form::submit('Create Post', array('class' => 'btn btn-primary')) }}
    {!! Form::close() !!}

@endsection