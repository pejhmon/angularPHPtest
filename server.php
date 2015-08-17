<?php
    session_start();
    $_SESSION ['serverName'] = $_POST ['serverName'];
    $_SESSION ['serverAdmin'] = $_POST ['serverAdmin'];
    $_SESSION ['serverPassword'] = $_POST ['serverPassword'];
    header("Location: loginPage.php");
?>