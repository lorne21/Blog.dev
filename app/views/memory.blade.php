<html>
<head>
	<title>Playing with Cards</title>

	<link href="/css/bootstrap.min.css" rel="stylesheet">
	<style>
	.card{
		height: 300px;
		width: 240px;
		margin-top: 20px;
		margin-right: 20px;   
		border-radius: 3%;
	}

	.frontimg{
		height: 270px;
		width: 200px;
		/*border: 1px solid black;*/
		margin-left: 20px;
		margin-top: 16px; 
		border-radius: 3%;
		position: relative;
		background-color: black; 
	}

	.frontleft{
		height: 30px;
		width: 30px;
		/*border: 1px solid black;*/
		margin-top: 2px;
		margin-left: 2px; 
		border-radius: 3%;
		position: relative;
		background-color: clear; 
	}

	.frontright{
		height: 30px;
		width: 30px;
		/*border: 1px solid black;*/
		margin-left: 205px; 
		border-radius: 3%;
		position: relative;
		background-color: clear;
	}

	.back{
		background: url(/img/scoobyback.jpg) no-repeat center;
		background-size: cover;
		border-radius: 3%;
	}

	.front{
		background: url(/img/scoobyback.jpg) no-repeat center;
		background-size: cover;
		border-radius: 3%;
	}

	.col-md-3{
		padding-right: 0px;
		padding-left: 2px;
	}

	</style>

	<script src="/js/jquery.js"></script>
	<script src="https://cdn.rawgit.com/nnattawat/flip/v1.0.17/dist/jquery.flip.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div id="1" class="card col-md-3">
				<div class="front"></div>
				<div class="back">
					<div class="frontimg"></div>
				</div>
			</div> 
			<div id="2" class="card col-md-3">
				<div class="front"></div>
				<div class="back">
					<div class="frontimg"></div>
				</div>`
			</div>
			<div id="3" class="card col-md-3">
				<div class="front"></div>
				<div class="back">
					<div class="frontimg"></div>
				</div>`
			</div>
			<div id="4" class="card col-md-3">
				<div class="front"></div>
				<div class="back">
					<div class="frontimg"></div>
				</div>`
			</div>
			<div id="5" class="card col-md-3">
				<div class="front"></div>
				<div class="back">
					<div class="frontimg"></div>
				</div>`
			</div>
			<div id="6" class="card col-md-3">
				<div class="front"></div>
				<div class="back">
					<div class="frontimg"></div>
				</div>`
			</div> 
			<div id="7" class="card col-md-3">
				<div class="front"></div>
				<div class="back">
					<div class="frontimg"></div>
				</div>`
			</div> 
			<div id="8" class="card col-md-3">
				<div class="front"></div>
				<div class="back">
					<div class="frontimg"></div>
				</div>`
			</div>
			<div id="9" class="card col-md-3">
				<div class="front"></div>
				<div class="back">
					<div class="frontimg"></div>
				</div>`
			</div>
			<div id="10" class="card col-md-3">
				<div class="front"></div>
				<div class="back">
					<div class="frontimg"></div>
				</div>`
			</div>
			<div id="11" class="card col-md-3">
				<div class="front"></div>
				<div class="back">
					<div class="frontimg"></div>
				</div>`
			</div>
			<div id="12" class="card col-md-3">
				<div class="front"></div>
				<div class="back">
					<div class="frontimg"></div>
				</div>`
			</div> 
		</div> <!--end row -->
	</div> <!--end container -->
	<script>
	// $(document).ready(function() {

		var cardImages = $('.frontimg');
		var cards = $('.card');
		var score = 0;   
		var checkArray = []; 

		var images = [
			"/img/daphne.png", 
			"/img/Fred_Jones.gif",
			"/img/ghost.png",
			"/img/Shaggy.gif",
			"/img/snowman.jpg",
			"/img/vampire.jpg",
			"/img/daphne.png", 
			"/img/Fred_Jones.gif",
			"/img/ghost.png",
			"/img/Shaggy.gif",
			"/img/snowman.jpg",
			"/img/vampire.jpg"
		];

		// this function shuffles the array
		function shuffle(o){
		    for(var j, x, i = o.length; i; j = Math.floor(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
		    return o;
		}

		// this function generates the cards
		function generateCards(){
			shuffle(images);
			for (var i = 0; i < cards.length; i++){
				var image = images[i];
				var cardback = cardImages[i];
				var card = cards[i];
				var style = "url(" + image + ") no-repeat center";
				cardback.style.background = style; 
				cardback.style.backgroundSize = "100% 100%";
				card.dataset.pic = image;
			}	
		}

		generateCards(); 

		// function to check if two or more are flipped
		function twoCheck(){
			if (checkArray.length == 2){
				if (checkArray[0] == checkArray[1]){
					checkArray = []; 
				} else {
					console.log ('not equal');
					checkArray = [];
					$(".card").each(function(){
						var toFlip = $(this)
						var front = $(this).children('.front');
						var zee = front.css('z-index');
						if (zee == "0"){
							toFlip.flip(false);
						}
					});
				}
			}
		}

		// this function checks game win
		function gameCheck(){
			
		}

		$(".card").flip();

		$(".card").on('flip:done',function(){
			var that = $(this).data("pic");
			checkArray.push(that);
			twoCheck();
		});

		
	// });
	
	</script>
</body>
</html>