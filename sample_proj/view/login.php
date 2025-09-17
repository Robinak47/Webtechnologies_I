<?php
    session_start();
    if(isset($_SESSION["userId"]))
    {
        if(isset($_SESSION["role"])==1)
        {
            header("Location:admin/home.php");
        }

        elseif(isset($_SESSION["role"])==2)
        {
            header("Location:employee/home.php");
        }

        else
        {
             header("Location:client/home.php");   
        }

    }

    else
    {

    }

?>

<!doctype html>
<html>
    <head></head>
    <body>
        <form action="../controller/authController.php" method="POST">
            <label for="userId">User ID: </label>
            <input type="text" name="userId"><br>
            <span name="userIderr" style="color:red;"><?php if(isset($_GET["idErr"])){echo $_GET["idErr"]; } ?></span>

            <label for="pass">Password: </label>
            <input type="text" name="pass"><br>
            <span name="passerr" style="color:red;"><?php if(isset($_GET["passErr"])){echo $_GET["passErr"]; } ?></span>

            <input type="submit" name="submit" value="login">
            <span name="invalidUser" style="color:red;"><?php if(isset($_GET["invalidUser"])){echo $_GET["invalidUser"]; } ?></span>
            
        </form>
    </body>
</html>


