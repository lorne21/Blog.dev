<html>
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Where in the World</title>

	<!-- <link rel="stylesheet" type="text/css" href="/css/mole.css"> -->
	<style>
		body {	
			padding: 20px;
		}

		table {
			/*margin: 0 auto;*/
			border-collapse: collapse;
			background: url(img/carmenMap.jpg) no-repeat center center;
			background-size: cover; 
		}
		td {
		    width: 90px; height: 90px;
		    /*transition: all 0.5s ease;*/
		    /*border: solid black;*/
		    /*border-radius: 50%;*/
		}

		.container{
			width: 2000px;
			height: 100%;
		}

		#left{
			float:left;
			width: 12%;
			height: 723px;
			background-color: green;
		}

		#right{
			float:right;
			width: 88%;
		}

		#begin {
			margin: 0 auto;
			background: url(/img/carmenlogo2.jpg);
			background-size: cover;
			width: 150px;
			height: 150px; 
			/*border: 1px solid black;*/
			border-radius: 50%;
			/*opacity: 0;*/
				/*border attribute is just for editing maps*/
		}

	</style>	

</head>
<body>
	<div class="container">
		<div id="left">
			<h2> Click the logo to begin </h2>
			<div id="begin"></div>
			<div id="newScore">
				<h2>Score:<span id="score">0</span></h2>
			</div>
		</div>
		<div id="right">
			<table>

			<tr class="row0">
				<td class="round4"></td>
				<td class="round3 round6"></td>
				<td class="round2 round6"></td>
				<td class="round6"></td>
				<td class="round6"></td>
				<td class="round2 round6"></td>
				<td></td>
				<td class="round5"></td>
				<td></td>
				<td class="round6"></td>
			</tr>
			<tr class="row10">
				<td class="round6"></td>
				<td class="round3 round6"></td>
				<td class="round5 round6"></td>
				<td class="round2 round3 round5 round6"></td>
				<td class="round2 round5 round6"></td>
				<td class="round5 round6"></td>
				<td class="round2 round5 round6"></td>
				<td class="round4 round5 round6"></td>
				<td class="round5 round6"></td>
				<td></td>
			</tr>
			<tr class="row20">
				<td class="round3 round5 round6"></td>
				<td class="round4 round5 round6"></td>
				<td class="round1 round5 round6"></td>
				<td class="round5 round6"></td>
				<td class="round2 round4 round5 round6"></td>
				<td class="round1 round2 round4 round5 round6"></td>
				<td class="round1 round5 round6"></td>
				<td class="round1 round3 round4 round5 round6"></td>
				<td class="round4 round5 round6"></td>
				<td></td>
			</tr>
			<tr class="row30">
				<td class="round3 round4 round5"></td>
				<td class="round4 round5 round6"></td>
				<td class="round1 round4 round5 round6"></td>
				<td class="round3 round5 round6"></td>
				<td class="round1 round3 round4 round5 round6"></td>
				<td class="round1 round5 round6"></td>
				<td class="round1 round5 round6"></td>
				<td class="round1 round4 round5 round6"></td>
				<td class="round4 round5 round6"></td>
				<td></td>
			</tr>
			<tr class="row40">
				<td></td>
				<td class="round4 round6"></td>
				<td class="round4 round6"></td>
				<td class="round1 round4 round6"></td>
				<td class="round2 round4 round5 round6"></td>
				<td class="round1 round4 round5 round6"></td>
				<td class="round2 round4 round5 round6"></td>
				<td class="round2 round4 round5 round6"></td>
				<td class="round1 round4 round5"></td>
				<td class="round1 round4"></td>
			</tr>
			<tr class="row50">
				<td></td>
				<td></td>
				<td class="round6"></td>
				<td class="round1 round4"></td>
				<td class="round3 round6"></td>
				<td class="round4 round5"></td>
				<td class="round2 round3 round4 round5"></td>
				<td class="round4 round5"></td>
				<td class="round4 round6"></td>
				<td class="round1"></td>
			</tr>
			<tr class="row60">
				<td class="round4"></td>
				<td></td>
				<td></td>
				<td class="round6"></td>
				<td class="round3 round4"></td>
				<td class="round2 round5"></td>
				<td class="round4 round5"></td>
				<td class="round4 round5"></td>
				<td></td>
				<td class="round5"></td>
			</tr>
			<tr class="row70">
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td class="round3 round5"></td>
				<td class="round2 round5"></td>
				<td class="round4"></td>
				<td></td>
				<td></td>
			</tr>
			
			</table>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="/js/mole.js"></script>

</body>
</html>b