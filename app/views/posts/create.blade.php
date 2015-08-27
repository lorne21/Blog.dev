@extends('layouts.master')

@section('content')
    <br>
    <br>
      <div class="container">
        <h1>Create Post</h1>

        {{ Form::open(array('action' => array('PostsController@store'), 'files'=>true)) }}
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
      </div>
 
 @stop