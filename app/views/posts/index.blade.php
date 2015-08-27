@extends('layouts.master')

@section('content')
  <body>

    <nav class="navbar navbar-inverse navbar-static-top">
      <div class="container" >
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ action('PostsController@index') }}">ForLorne Love</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse navbar-right">
          <ul class="nav navbar-nav">
            @if(Auth::check())
            <li><a href="{{ action('PostsController@create') }}">Create Post</a></li>
            <li><a href="{{ action('HomeController@doLogout') }} ">Logout</a></li>
            @else
            <li><a href="#login" data-toggle="modal" data-target="#loginModal">Login</a></li>
            @endif
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
      
      <!--CONTAINER-->
<div class="container">
   <!--ROW-->
   <div class="row">
      <div class="title">
         ForLorne Love
      </div>

      <div class="container" style="padding-top: 50px">

        @if (Session::has('successMessage'))
            <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
        @endif
        @if (Session::has('errorMessage'))
            <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
        @endif

        @if($errors->has())

            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

        @endif

    </div><!-- /.container -->
  
        
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

              {{ Form::open(array('action' => array('PostsController@storeComment'))) }}
                  <div class="form-group @if($errors->has('title')) has-error @endif">
                      {{-- {{ Form::label('comment', 'Please Leave A Comment') }} --}}
                      {{ Form::text('comment', null, ['class' => 'form-control', 'placeholder' => 'Please Leave A Comment']) }}
                  </div>
                  <button class="btn btn-primary">Leave Comment</button>
              {{ Form::close() }}

              @if(Auth::check())
                @if(Auth::id() == $post->user_id)
                  <div class="row">
                      <div class="col-md-6">
                          <a class="btn btn-primary" href="{{ action('PostsController@edit', $post->id) }}">Edit</a>
                          {{-- <button id="delete" class="btn btn-danger del-btn" data-action="{{action()}}">Delete</button> --}}
                      </div>
                  </div>
                @endif
              @endif
              

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

<!-- LOGIN MODAL -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="loginModalLabel">Please enter your username and password</h4>
          </div>
          <div class="modal-body">
            {{ Form::open(array('action' => array('HomeController@doLogin'))) }}
                <div class="form-group">
                    {{ Form::label('email', 'Email') }}
                    {{ Form::email('email', null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('password', 'Password') }}
                    {{ Form::password('password', ['class' => 'form-control']) }}
                </div>
                <br>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-warning">Login</button>
            {{ Form::close() }}
          </div>
        </div>
      </div>
    </div>
<!-- END LOGIN MODAL -->

@stop