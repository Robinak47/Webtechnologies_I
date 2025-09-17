<?php
session_start();
    if(isset($_SESSION["userId"]))
    {
        if(isset($_SESSION["role"])==3)
        {
            
        }

        else
        {
            header("Location:../login.php");
        }

        

    }

    else
    {
        header("Location:../login.php");
    }


    echo "<h1>Welcome Client. Name: ".$_SESSION["userId"]."</h1><br>";

    echo "<a href='../logout.php'>logout</a>";

?>
