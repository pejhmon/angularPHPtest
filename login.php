<?php session_start(); ?>
<?php require_once 'dbconnection.php'; ?>

<?php
    // Encodes data from a POST request
    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);
    
    //Uses said POST data
    
    $username = $request->username;
    $password = $request->password;
    
    $password = sha1('gf35!&'.$password.'cg*l');

    $query = "SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}'";
    $result = sqlsrv_query($conn, $query) or die("Error: query to check login authentication failed");
        
    if (null == (sqlsrv_fetch_array($result))) {
        echo "Error: Username/password incorrect";
    }else{
        echo "Success";
    }

    /*
    //Connects to the database and runs the query
    $result = sqlsrv_query($sql, $con);

    //Saves the retrieved data as an array
    $json = array();
    while($row = sqlsrv_fetch_array($result))     
    {
        $json[]= array(
            'name' => $row['name'],
            'password' => $row['password']
        );
    }

    //Converts the array to a JSON string
    $jsonstring = json_encode($json);
    echo $jsonstring;
    */
?>
