<?php
    $host="127.0.0.1";
    $dbname="car_managemnet_system";
    $user="root";
    $pass="";

    function getConnection()
    {
        global $host;
        global $dbname;
        global $user;
        global $pass;
        $con= mysqli_connect($host, $user, $pass, $dbname);
        return $con;
    }
?>