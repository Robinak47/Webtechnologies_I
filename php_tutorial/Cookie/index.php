<?php

    

    if(isset($_COOKIE["userName"]))
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
        <h1> Welcome <?php echo $_COOKIE["userName"]; ?>  </h1>
        <a href="logout.php">logout</a>
    </body>

</html>