app.controller('server', function ($scope, $http) {

    $scope.init = function () {

        var request = $http({
            method: "post",
            url: "http://nhs-json.azurewebsites.net/index.php",
            data: {
                server: "details"

            },
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
        });
        /* Check whether the HTTP Request is Successfull or not. */
        request.success(function (data) {
            $scope.name = data.name;
            $scope.admin = data.admin;
            $scope.password = data.password;
            
        });
    }
});