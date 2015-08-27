@extends('layouts.master')

@section('content')
  <body>
    <br>
    <br>

	 <h1>Edit Your Post</h1>

    {{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT', 'files' => true)) }}
        <div class="form-group @if($errors->has('title')) has-error @endif">
            {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Please Enter A Title']) }}
        </div>

        <div class="form-group @if($errors->has('body')) has-error @endif">
            {{ Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Type Your Blog Here']) }}
        </div>

        <div class="form-group">
            {{ Form::file('img_path') }}
        </div>

        <button class="btn btn-primary">Save</button>
    {{ Form::close() }}
        <button id="delete" class="btn btn-danger">Delete</button>
        {{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE', 'id' => 'formDelete')) }}
        {{ Form::close() }}

@stop