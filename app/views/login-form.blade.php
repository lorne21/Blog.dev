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

	<div class="form-group">
	    {{ Form::label('email', 'Email') }}
	    {{ Form::text('email', null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group">
	    {{ Form::label('password', 'Password') }}
	    {{ Form::password('password', null, ['class' => 'form-control']) }}
	</div>

	<button class="btn btn-primary">Login</button>

	</body>
</html>