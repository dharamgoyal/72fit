/**
 * AngularJS Tutorial 1
 * @author Nick Kaye <nick.c.kaye@gmail.com>
 */

/**
 * Main AngularJS Web Application
 */
/*var app = angular.module('tutorialWebApp', ['ngRoute'
]);*/
var app = angular.module('tutorialWebApp', ['locator', 'ngAutocomplete', 'ngRoute', 'ngAnimate', 'ngResource', 'ui.bootstrap','toaster','ngTable','ngCookies','angular.filter']);

/**
 * Configure the Routes
 */
app.config(['$routeProvider', function ($routeProvider) {
  $routeProvider
    // Home
    .when("/", {templateUrl: "views/index.html", controller: "indexCtrl"})
    // Pages 
	.when("/doctors/", {templateUrl: "views/search-results.html", controller: "drListCtrl"})
	.when("/doctors/:drname", {templateUrl: "views/search-results.html", controller: "drListCtrl"})
	.when("/doctors/:city/:specialty", {templateUrl: "views/search-results.html", controller: "drListCtrl"})
	.when("/doctors/:city/:specialty/:locality", {templateUrl: "views/search-results.html", controller: "drListCtrl"})
    .when("/doctor/:city/:id", {templateUrl: "views/detail.html", controller: "drDetailCtrl"})
    
    // else 404
    //.otherwise("/404", {templateUrl: "views/404.html", controller: "PageCtrl"});
}])


/**
 * Controls all other Pages
 */