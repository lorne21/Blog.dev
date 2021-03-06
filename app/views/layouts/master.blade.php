<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <meta name="csrf-token" content="{{{ csrf_token() }}}">
      <!-- Stylesheets -->
      <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="/css/practice.css">

      {{-- Scripts --}}
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
      <script src="/js/practice.js"></script>
  </head>
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
          <a class="navbar-brand" href="{{ action('HomeController@getPortfolio') }}">ForLorne.us</a>
          <a class="navbar-brand" href="{{ action('PostsController@index') }}">Home</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse navbar-right">
          <ul class="nav navbar-nav">
            @if(Auth::check())
            <li><a href="{{ action('PostsController@create') }}">Create Post</a></li>
            <li><a href="{{ action('PostsController@getManage') }}">Manage Posts</a></li>
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
         <a href="{{ action('PostsController@index') }}" class="love">ForLorne Love</a>
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
    @yield('content')

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
</body>
</html>