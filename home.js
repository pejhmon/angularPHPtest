app.controller('sign_up', function ($scope, $http) {

    $scope.check_credentials = function () {
        
        var request = $http({
            method: "post",
            url: "login.php",
            data: {
                username: $scope.username,
                password: $scope.password
            },
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
        });
        /* Check whether the HTTP Request is Successfull or not. */
        request.success(function (data) {
  //          $scope.message = "Test"
            $scope.message = "Reply from PHP file : Your username is" + data;
        });
    }
});
