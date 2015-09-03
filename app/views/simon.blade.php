<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Simon Says</title>

	<link href="/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/css/simon.css">
	

</head>
<body>
	<div class="container">
	<h1>Simon Says</h1>

	<h2 id="message">Round Number:    <span id="round"></span></h2>
	</div>

	<div class="container" id="simonBox">
		<div class="row">	
			<div class='classBox col-md-6' id='redBox' data-number="0"></div>
			<div class='classBox col-md-6' id='blueBox' data-number="1"></div>
		</div>
		<div class="row">
			<div class='classBox col-md-6' id='greenBox' data-number="2"></div>
			<div class='classBox col-md-6' id='yellowBox' data-number="3"></div>
		</div>
	</div>
	<br>
	<div class="container">
	<button type="button" class="btn col-md-4 btn-success" id="startBtn">Begin!</button>
	</div> 

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="/js/simon.js"></script>

</body>
</html>