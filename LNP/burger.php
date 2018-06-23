<!DOCTYPE html>
<html lang="en">

    <head></head>
    <body>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.23/angular.min.js"></script>
<div ng-app="myApp" ng-controller="myController" ng-class="{'cross': isActive}" class="cAnimatedExpander" ng-click="animateHamburger()">
  <span class="top"></span>
  <span class="middle"></span>
  <span class="bottom"></span>
</div>
<style>
        .cAnimatedExpander {
  display: flex;
  flex-direction: column;
  justify-content: space-around;
  height: 30px;
  cursor: pointer;
}

.cAnimatedExpander span {
  height: 3px;
  width: 30px;
  background-color: #e60909;
  transition-duration: 0.5s;
}

.cross span.top {
    transform: translate(0px, -4px) rotate(45deg);
    transition-duration: 0.5s;
    transform-origin: left;
}

.cross span.middle {
  opacity: 0;
  transition-duration: 0.5s;
}

.cross span.bottom {
    transform: translate(0px, -4px) rotate(-45deg);
    transition-duration: 0.5s;
    transform-origin: left;
}
        
        </style>
 <script>
        
        angular.module("myApp", []).controller("myController", function($scope) {
  $scope.animateHamburger = function() {
    // ANIMATION
    console.log("animate hamburger to cross and back to hamburger");
    $scope.isActive = !$scope.isActive;
  }
  
});
        
        </script>   
    </body>
</html>