app.directive("bikeDirective", function() {
	var linkFunction = function(scope, element, attributes) {
    scope.bikeIndex = attributes["bikeDirective"];
  };
    return {
		restrict:'EA',
        templateUrl: 'manageTemplate.html',
      link: linkFunction
    };
}); 
