var MainApp = angular.module('MainApp', [
	'ngResource',
	'ngRoute'
]);
MainApp.factory('DataResource', function($resource) {
	return $resource('/boardclick/:datatype/:id/:file', {}, {
		query: {method: 'GET', isArray: true},
		get: {method: 'GET'},
		remove: {method: 'DELETE'},
		edit: {method: 'PUT'},
		set: {method: 'POST'}
	});
});
MainApp.controller('MainCtrl', function($scope, $routeParams, $location, DataResource, $route, $rootScope, $interval) {
	if (!$rootScope.authenticated) {
		DataResource.get({datatype:"me"}, function(data) {
			$rootScope.userdata = data;
			$rootScope.authenticated = true;
			DataResource.query({datatype:"repos", id:$rootScope.userdata.login}, function(repos) {
				$rootScope.repositories=repos;
			});
		}, function(error) {
			$rootScope.user = "";
			$rootScope.authenticated = false;
		});
	}
	if ($routeParams.id && $routeParams.id!=null) {

    } else {
        $scope.items = DataResource.query({datatype:"events"});
    }
	$scope.login = function() {
                DataResource.set({datatype:"login"}, $scope.credential, function(data) {
                    $rootScope.userdata = data;
           			$rootScope.authenticated = true;
                    $location.path('/');
                }, function(error) {
                    $rootScope.user = "";
                	$rootScope.authenticated = false;
                });
	};
	$scope.join = function() {
		DataResource.set({datatype:"join"}, $scope.newPerson, function(data) {
	            $location.path('/login');
        	});
	};
	$scope.logout = function() {
        	LogoutResource.signout({}, function(data) {
            		$location.path('/login');
		});
	};
	$scope.addEvent = function() {
	    DataResource.set({datatype:"events"}, $scope.newEvent, function(data) {
    	    $location.path('/events');
        });
	};
});

MainApp.config(['$routeProvider', function($routeProvider) {
        $routeProvider
		    .when('/login', {templateUrl: 'views/login.html', controller: 'MainCtrl'})
            .when('/join', {templateUrl: 'views/join.html', controller: 'MainCtrl'})
            .when('/events/add', {templateUrl: 'views/addevent.html', controller: 'MainCtrl'})
            .when('/events/', {templateUrl: 'views/listevents.html', controller: 'MainCtrl'})
            ;
}]);
