<?php
session_start();
if ( isset($_SESSION) && empty($_SESSION['serverName']) 
        && empty($_SESSION['serverAdmin']) 
        && empty($_SESSION['serverName'])) {
    header("Location: loginPage.php");
}else{
    echo "
<html>
    <head>
        <meta charset='utf-8' />
        <title>Test template application</title>
        <script src='angular.js' type='text/javascript'></script>
        <script src='app.js' type='text/javascript'></script>
        <script src='server.js' type='text/javascript'></script>
    </head>
    <body>
        

        <div ng-app='angular_post' ng-controller='server' ng-init='init()' style='display: none;'>
            <form action='server.php' method='post' id='serverDetails'>        
                <input type='text' name='serverName' value='{{name}}'>
                <input type='text' name='serverAdmin' value='{{admin}}'>
                <input type='text' name='serverPassword' id='pass' value='{{password}}'>
            </form>
        </div>

        <div id='tag'></div>
        
        <script type='text/javascript'>
            setTimeout(function() {
                document.getElementById('serverDetails').submit();
            }, 1);
                
        </script>
    
        
    
    </body>
</html>
";
}
?>