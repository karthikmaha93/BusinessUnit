<html>
<head>
    <title></title>
</head>
<style type="text/css">
  h2{
    color: blue;
    text-align: center;
  }
  .Mobile{
  margin: auto;
  width: 50%;
  border: 3px solid green;
    padding: 10px;
  }

    .OTP{
  margin: auto;
  width: 50%;
  border: 3px solid green;
  padding: 10px;
  }

      .Password{
  margin: auto;
  width: 50%;
  border: 3px solid green;
  padding: 10px;
  }

  .button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin: 2px 2px;
  cursor: pointer;

}
.lable{
  color: green;
}
</style>
<body>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.9/angular.min.js"></script>
    <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js'></script>
    <script type="text/javascript">
        var app = angular.module('MyApp', [])
        app.controller('MyController', function ($scope) {
            //This will hide the DIV by default.
            $scope.IsVisible = false;
            $scope.IsVisible2 = false;
            $scope.location = "";
            $scope.ShowOtp = function () {
                //If DIV is visible it will be hidden and vice versa.
                $scope.IsVisible = $scope.IsVisible ? false : true;
            }
            $scope.ShowPass = function () {
                //If DIV is visible it will be hidden and vice versa.
                $scope.IsVisible2 = $scope.IsVisible2 ? false : true;
            }
            $scope.clicked = function(){
                console.log('is working');
                window.location = "Business_View.php";
            }

            
        });
    </script>
    <div ng-app="MyApp" ng-controller="MyController">
        <div class="Mobile">
            <form name="myForm" action="#sent" method="post" ng-app>
                <label class="lable">Enter Mobile Number :</label>
                   <input name="Phonenumber" type="value" ng-model="Phonenumber" />
               <button type="button" value="Show Hide DIV" ng-disabled="!(!!Phonenumber)" ng-click="ShowOtp()">Submit</button>
            </form>
        </div>
        <br>
        <br>
        <div class="OTP  ng-hide"  ng-show = "IsVisible">
            <form name="myForm" action="#sent" method="post" ng-app>
                <label class="lable">Enter OTP Number :</label>
                    <input name="OTP" type="value" ng-model="OTP" />
                <button type="button" value="Show Hide DIV" ng-disabled="!(!!OTP)"  ng-click="ShowPass()">Submit</button>
            </form>
        </div>
        <div class="Password" ng-show = "IsVisible2">
                <label class="lable">Enter Password :</label>
                    <input name="Password" type="value" ng-model="Password" />
                <button type="submit" ng-disabled="!(!!Password)" ng-click="clicked()">Submit</button>
        </div>
    </div>
</body>
</html>