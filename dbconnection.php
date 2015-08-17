<?php
$serverName = $_SESSION ['serverName'];
$serverAdmin = $_SESSION ['serverAdmin'];
$serverPassword = $_SESSION ['serverPassword'];

echo $serverName;
echo $serverAdmin;
echo $serverPassword;

/*
$str = file_get_contents('http://nhs-json.azurewebsites.net/index.php');
echo $str;
$obj = json_decode($str);
$serverName = $obj->name;
$serverAdmin = $obj->admin;
$serverPassword = $obj->password;
*/
// Server details
$dbname = "testdb1";

$serverID = $serverAdmin . "@" . $serverName;
$server = "tcp:" . $serverName . ".database.windows.net,1433";
$connectionOptions = array( "Database"=>$dbname, "UID"=>$serverID, "PWD"=>$serverPassword);

$conn = sqlsrv_connect($server, $connectionOptions);

if($conn == false) {
    echo 'Connection failed. ';
    die(print_r(sqlsrv_errors(), true));
}
?>
