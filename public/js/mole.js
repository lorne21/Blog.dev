"use strict";
// (function (){

	var mistakeArray = [];
	var level = 1; 
	var speedInterval = 2000;
	var scoring = 0;
	var moleLoop;
	var moleHole; 
	var images = ['henchman1.jpg', 'henchman2.jpg', 'henchman3.jpg', 'henchman4.jpg', 'henchman6.jpg']

	// this function starts the game 
	$('#begin').click(function(e) {
		getReady();
		moleLoop = setInterval(moleMove, speedInterval);
	});

	// this function clears everything but highscore
	function getReady() {
		mistakeArray = [];
		speedInterval = 2000;
		scoring = 0;
		$('#score').text('0');
	}


	// this function moves the mole
	function moleMove(){
		moleHole = $('.round' + level)
		var rand = Math.floor(Math.random()*moleHole.length);
		var toAnimate = moleHole[rand];
		animateHole(toAnimate);
	}

	// this function actually animates the hole.    
	function animateHole(id){
		$(id).addClass('active');
		$(id).css('background' , 'url(img/henchman/' + getHench() + ') no-repeat center center');
		setTimeout(function(){
			$(id).removeClass('active');
			$(id).css('background' , '');
		}, 1000)
	}

	// this function updates the score 
	function scoreUpdate(){
		scoring += 1
		console.log(scoring);
		$('#score').text(scoring);
		if (scoring == 10){
			clearInterval(moleLoop);
			// create a function to pop modal and ask question
				// if question is wrong, create function to re-run the previous round
			levelUp();
			scoring = 0;
			increaseSpeed();
			moleLoop = setInterval(moleMove, speedInterval);
			alert('Round' + level);
		} 
	}

	// this function updates the speed/round/difficulty
	function increaseSpeed(){
		speedInterval -= 200; 
		// console.log(speedInterval);
	} 

	// this function gets a random henchman
	function getHench(){
		var randImg = Math.floor(Math.random()*images.length);
		var image = images[randImg];
		return image; 
	}

	
	function levelUp(){
		$('.round' + level).css('background' , '');
		level += 1; 
		mistakeArray = []
		if (level == 2){
			$('table').css('background' , 'url(/img/sa2.jpg) no-repeat center center');
			$('table').css('background-size' , 'cover');
		} else if (level == 3){
			$('table').css('background' , 'url(/img/asia5.jpg) no-repeat center center');
			$('table').css('background-size' , 'cover');
		} else if (level == 4){
			$('table').css('background' , 'url(/img/europe.jpg) no-repeat center center');
			$('table').css('background-size' , 'cover');
		} else if (level == 5){
			$('table').css('background' , 'url(/img/africa2.gif) no-repeat center center');
			$('table').css('background-size' , 'cover');
		} else if (level == 6){
			$('table').css('background' , 'url(/img/usa4.jpg) no-repeat center center');
			$('table').css('background-size' , 'cover');
		}
		

	}

	// this function handles the players behavior and everything that's supposed to happen
	$('td').click(function(e){
		var that = $(this); 
		if (that.hasClass('active')){
			scoreUpdate();
			console.log(scoring);
			// increaseSpeed();  add this in later on round up
		} else {
			mistakeArray.push('x');
			if (mistakeArray.length == 5){
				alert ('You Lose');
				clearInterval(moleLoop);
				getReady();
			}
		}
	});

	

	







// })();