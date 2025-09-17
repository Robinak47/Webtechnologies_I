<?php
    $host="localhost";
    $user="root";
    $pass="";
    $db="user_management_system";
    $port="3308";

    function getConnection()
    {
        global $host;
        global $user;
        global $pass;
        global $db;
        global $port;

        $conn=mysqli_connect($host,$user,"",$db,$port);
        return $conn;
    }


?>
