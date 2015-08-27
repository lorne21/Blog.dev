<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- Stylesheets -->
      <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </head>
  <body>
    <br>
    <br>
      <div class="container">
        <h2>{{{ $post->title }}}</h2>

        <p>{{{ $post->body }}}</p>

        @if(Session::has('test'))
            {{ Session::get('test') }}
        @endif

        @if(Auth::check())
          @if(Auth::id() == $post->user_id)
            <div class="row">
                <div class="col-md-6">
                    <a class="btn btn-primary" href="{{ action('PostsController@edit', $post->id) }}">Edit</a>
                    <button id="delete" class="btn btn-danger">Delete</button>
                </div>
            </div>
          @endif
        @endif
        
        {{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE', 'id' => 'formDelete')) }}
        {{ Form::close() }}
      </div>
  </body>
</html>