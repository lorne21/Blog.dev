@extends('layouts.master')


@section('content')
   
      {{ Form::open(array('action' => array('PostsController@index'), 'method' => 'GET')) }}
            <div class="form-group col-xs-4">
                {{-- {{ Form::label('search', 'Search') }} --}}
                {{ Form::text('search', null, ['class' => 'form-control', 'placeholder' => 'Search Blog']) }}
            </div>

            <button class="btn btn-primary">Search</button>
      {{ Form::close() }}
      <br>
      <!--İTEM-->
      @foreach($posts as $post)

      <div class="col-4-grid">
         <div class="item">
            <div class="front-end">
              <div class="item-title">{{ $post->title }}</div>
              <img src="{{ $post->img_path }}" alt="" />
            </div>
            <div class="back-end">
              <div class="item-image">
                <img src="{{ $post->img_path }}" alt="" />
              </div>
              <div class="item-title">{{ $post->title }}</div>
              <p>{{{ $post->body }}}</p>

              <p>{{{ $post->body }}}</p>

              <p>{{{ $post->body }}}</p>
            </div>
         </div>
      </div>
      @endforeach
      <!--#İTEM-->
      <br>
      {{ $posts->links() }}

      
      {{-- {{ Form::open(['method' => 'DELETE' 'id'=>'del-form']) }} --}}
      {{-- {{ Form::close() }} --}}
   <!--#ROW--> 
</div>
<!--#CONTAINER-->
<!--SHOW ITEM-->
<div class="show-item">
  <div class="show-item-close"></div>
  <!--CONTAINER600-->
  <div class="container600 single"></div>
  <!--#CONTAINER600-->
  <div class="show-item-back-top"></div>
</div>
<!--#SHOW ITEM-->



@stop