<?php

    $err="";
    $hasErr=false;
    if(isset($_POST["submit"]))
    {
        if(empty($_POST["userName"]))
        {
            $err="Please input a valid user Name";
            $hasErr=true;
        }

        if(empty($_POST["pass"]))
        {
            $err=$err. "Please input a valid password";
            $hasErr=true;
        }

        if($hasErr)
        {
            echo $err;
        }

        else
        {
           setcookie("userName",$_POST["userName"], time()+300);
            header("Location:index.php");
        }
    }


?>


<!doctype html>
<html>
    <head>
    </head>
    <body>
        <form action="" method="POST">
            <label for="userName">User Name </label>
            <input type="text" name="userName"><br>

            <label for="pass">Password: </label>
            <input type="text" name="pass"><br>

            <input type="submit" name="submit" value="submit">
        </form>
    </body>

</html>