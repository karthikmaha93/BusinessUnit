<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<head>
<title>
HDFC Bank
</title>
</head>
<body ng-app="AngularfilterApp">
<div ng-controller="filterctrl">
<h1>Welcome To HDFC Counter</h1>
<lable class="lable">Enter to Filter:</lable>
<input ng-model="searchtxt" type="text" placeholder="Enter Detail">
<br>
<br>
<table  id="customers">
<tr>        
<th>Token Number</th>
<th>Business Name</th>
<th>Token Status</th>
</tr>
<tr ng-repeat="user in users | filter : searchtxt">
<td>{{user.Token}}</td>
<td>{{user.B_Name}}</td>
<td>{{user.T_Status}}</td>
</tr>
</table>
</div>
</body>
</html>

<script>
var app = angular.module("AngularfilterApp", []);
app.controller('filterctrl', ['$scope', '$http', function ($scope, $http) {
 $http({
  method: 'get',
  url: 'Business.php'
 }).then(function successCallback(response) {
  // Store response data
  $scope.users = response.data;
  console.log(response.data);
 });
}]);

</script>

<style type="text/css">
  #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

.lable{
  color: blue;
} 
 h1 {
  color: green;
 }
</style>