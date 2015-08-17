<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Test template application</title>
        <script src="angular.js" type="text/javascript"></script>
        <script src="app.js" type="text/javascript"></script>
        <script src="home.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="container">
            <h1>This is a test application which attempts to connect to an externally hosted PHP server using an AJAX call in AngularJS</h1>
            <div id="login" ng-app='angular_post' ng-controller='sign_up'>
                <input type="text" size="40" ng-model="username" placeholder="Type your username"><br>
                <input type="password" size="40" ng-model="password" placeholder="Type your password"><br>
                <button ng-click="check_credentials()">Login</button><br>
                <span id="message">{{message}}</span>
            </div>
        </div>
    </body>
</html>