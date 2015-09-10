(function() {
	"use strict";

	var app = angular.module('controllerTest', []);

	app.controller('CartController', function() {
	    this.items = [];
	    this.newItem = {
	    	quantity: 1
	    }; 

	    this.addItem = function(){
	    	this.items.push(this.newItem);
	    	this.newItem = {
		    	quantity: 1
		    };
	    };

	    this.getSubTotal = function(){
	    	var subTotal = 0;
	    	for(var i = 0; i < this.items.length; i++){
	    		subTotal += this.items[i].quantity * this.items[i].price; 
	    	}
	    	return subTotal;
	    }

	    this.getShipping = function(){
	    	var shipping = 0; 
	    	for(var i = 0; i < this.items.length; i++){
	    		shipping += this.items[i].quantity * 1.25; 
	    	}
	    	return shipping;

	    }

	    this.removeItem = function($index){
	    	this.items.splice($index, 1);
	    }
	});


})();