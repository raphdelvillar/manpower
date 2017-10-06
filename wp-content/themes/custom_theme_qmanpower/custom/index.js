qmanpower.controller("indexCtrl", function($scope, $window, $location, $anchorScroll) {
	$scope.currState = "Home";

	$scope.goto = function(variable) {
		$scope.currState = variable;
		$location.hash(variable);
		$anchorScroll();
	}

	$scope.gotocontact = function(){
		$location.hash('contact');
		$anchorScroll();
	}

	$scope.images = [
	{
		'src':'wp-content/themes/custom_theme_qmanpower/assets/clients/1.jpg',
	},
	{
		'src':'wp-content/themes/custom_theme_qmanpower/assets/clients/2.jpg',
	},
	{
		'src':'wp-content/themes/custom_theme_qmanpower/assets/clients/3.jpg',
	},
	{
		'src':'wp-content/themes/custom_theme_qmanpower/assets/clients/4.jpg',
	},
	{
		'src':'wp-content/themes/custom_theme_qmanpower/assets/clients/5.jpg',
	},
	{
		'src':'wp-content/themes/custom_theme_qmanpower/assets/clients/6.jpg',
	},
	{
		'src':'wp-content/themes/custom_theme_qmanpower/assets/clients/7.jpg',
	},
	{
		'src':'wp-content/themes/custom_theme_qmanpower/assets/clients/8.jpg',
	},
	{
		'src':'wp-content/themes/custom_theme_qmanpower/assets/clients/9.jpg',
	},
	{
		'src':'wp-content/themes/custom_theme_qmanpower/assets/clients/10.jpg',
	},
	{
		'src':'wp-content/themes/custom_theme_qmanpower/assets/clients/11.jpg',
	},
	{
		'src':'wp-content/themes/custom_theme_qmanpower/assets/clients/12.jpg',
	},
	{
		'src':'wp-content/themes/custom_theme_qmanpower/assets/clients/13.jpg',
	},
	{
		'src':'wp-content/themes/custom_theme_qmanpower/assets/clients/14.jpg',
	},
	{
		'src':'wp-content/themes/custom_theme_qmanpower/assets/clients/15.jpg',
	},
	{
		'src':'wp-content/themes/custom_theme_qmanpower/assets/clients/16.jpg',
	},
	];
})