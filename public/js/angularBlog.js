(function() {
    "use strict";

    // This should be the actual name of your module
    var app = angular.module("angularBlog", []);

    // Find the token value from the page using jQuery
    const TOKEN = $("meta[name=csrf-token]").attr("content");
    
    // Set the token as an Angular constant
    app.constant("CSRF_TOKEN", TOKEN);
    
    // Configure $http to include both your token and a flag indicating the request is AJAX
    app.config(["$httpProvider", "CSRF_TOKEN", function($httpProvider, CSRF_TOKEN) {
        $httpProvider.defaults.headers.common["X-Csrf-Token"] = CSRF_TOKEN;
        $httpProvider.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
    }]);

    app.filter('phpDate', function() {
    // A filter declaration should return an anonymous function.
    // The first argument is the input passed to the filter
    // Any additional arguments are paramaters passed AFTER the filter name
        return function(input, format) {
            // Create an instance of Moment. Use both the
            // date value and timezone information PHP sent
            var date = moment.tz(input.date, input.timezone);

            if (format == "human") {
                // Special case for formatting. If user asks for "human" format
                // return a value like "13 minutes ago" or "2 weeks ago" etc.
                return date.fromNow();
            } else {
                // Covert the moment to a string using the passed format
                // If nothing is passed, uses default JavaScript date format
                return date.format(format);
            }
        };
    });

    app.controller('ManageController',["$http", "$log", "$scope", function($http, $log, $scope){
	    $scope.posts = [];
        $scope.currentpost = {};

	    $http.get('/posts/getList').then(function(response){
	    	$log.info("Post list success");

	    	$log.info(response);

	    	$scope.posts = response.data;

	    }, function(response){
	    	$log.error("Post list fail");

	    	$log.debug(response);
	    });

        $scope.editPost = function(index){
            var id = $scope.posts[index].id;
            var post = $scope.posts[index];

            $http.put("/posts/"+ post.id, {

                "title": post.title,
                "body": post.body,
            
            }).then(function(response){

                $log.info("Edit post success");
                $log.info(response);

            }, function(response){
                $log.error("Edit post fail");

                $log.debug(response);
            });
        };


            

	    $scope.deletePost = function(index){
            
            var post = $scope.posts[index];

            $http.delete("/posts/"+ post.id).then(function(response){
            
                $log.info("Delete post success");

                $log.info(response);

                $scope.posts.splice(index,1);

            }, function(response){
                $log.error("Delete post fail");

                $log.debug(response);
            });
        };

	}]);
})();