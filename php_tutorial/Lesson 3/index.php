<?php

    
    //$name=$_REQUEST['userName'] ?? "";
    if(isset($_REQUEST['userName'] ))
    {
        echo $_REQUEST['userName'] ;
    }

    else
    {
        
    }
?>

<!doctype html>
<html>
    <head>
    </head>

    <body>
        <form action="" method="POST">
            <input type="text" name="userName"><br>
            <input type="submit" name="submit" value="submit">
        </form>
    </body>
</html>
