"use strict";
$(document).ready(function(){

	var mistakeArray = [];
	var level = 1; 
	var speedInterval = 2000;
	var scoring = 0;
	var dogLoop;

	// this function starts the game 
	$('#begin').click(function(e) {
		getReady();
		dogLoop = setInterval(moleMove, speedInterval);
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
		var moleHole = $('.mole')
		var rand = Math.floor(Math.random()*6);
		var toAnimate = moleHole[rand];
		console.log(rand);
		var id = toAnimate.getAttribute('id');
		animateHole(id);
	}

	function moleMove2(){
		var moleHole = $('.mole')
		var rand2 = Math.floor(Math.random()*10) + 5;
		var toAnimate = moleHole[rand2];
		console.log(rand2);
		var id = toAnimate.getAttribute('id');
		animateHole(id);
	}


	// this function actually animates the hole.    
	function animateHole(id){
		$("#" + id).addClass('active');
		setTimeout(function(){
			$("#" + id).removeClass('active');
		}, 1000)
	}

	// this function updates the score 
	function scoreUpdate(){
		scoring += 1
		console.log(scoring);
		$('#score').text(scoring);
		if (scoring == 3){
			clearInterval(dogLoop);
			// create a function to pop modal and ask question
				// if question is wrong, create function to re-run the previous round
			alert('Round 2');
			mapRound2();
			increaseSpeed();
			dogLoop = setInterval(moleMove2, speedInterval);
		} else if (scoring == 6){
			clearInterval(dogLoop);
			alert('Round 3')
		}
	}

	// this function updates the speed/round/difficulty
	function increaseSpeed(){
		speedInterval -= 200; 
		console.log(speedInterval);
	}

	// this function updates the round
	// function roundUpdate(){
	// 	if (scoring == 2){
	// 		clearInterval(dogLoop);
	// 		// create a function to pop modal and ask question
	// 			// if question is wrong, create function to re-run the previous round
	// 		alert('Round 2');
	// 		setUpRound2();
	// 		dogLoop = setInterval(moleMove2, speedInterval);
	// 		// dogLoop(); 
	// 		// add modal here
	// 		// add css to change background
	// 		// add css to hide old divs
	// 		// create new function to pull random from new set of divs
	// 		// restart mole function

	// 	}
	// }
	// this function sets the css for round 2
	function mapRound2(){
		mistakeArray = []
		$('.firstRound').css('display' , 'none');
		$('.container').css('background' , 'url(/img/europe.jpg) no-repeat');
		$('.container').css('background-size' , 'cover');
		$('.secondRound').css('opacity' , '1');
		
		// do new henchman stuff
		$('#begin').css({ bottom: 322, right: 819 });

	}

	// this function handles the players behavior and everything that's supposed to happen
	$('.mole').click(function(e){
		var that = $(this);
		if (that.hasClass('active')){
			scoreUpdate();
			console.log(scoring);
			// increaseSpeed();  add this in later on round up
		} else {
			mistakeArray.push('x');
			if (mistakeArray.length == 5){
				alert ('You Lose');
				clearInterval(dogLoop);
				getReady();
			}
		}
	});
});
	

	







// })();