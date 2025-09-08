<?php

    session_start();

    if(isset($_SESSION["userName"]))
    {

    }

    else
    {
        header("Location: login.php");
    }


?>


<!doctype html>
<html>
    <head>
    </head>
    <body>
        <h1> Welcome <?php echo $_SESSION["userName"]; ?>  </h1>
        <a href="logout.php">logout</a>
    </body>

</html>