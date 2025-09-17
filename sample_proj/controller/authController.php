<?php
    require_once("userController.php");
    $IdErr="";
    $passErr="";
    $hasErr=false;
    $userId="";
    $pass="";
    if(($_SERVER["REQUEST_METHOD"]=="POST") && isset($_POST["submit"]))
    {
        if(empty($_POST["userId"]))
        {
            $IdErr="User id cannot be empty";
            $hasErr=true;

        }

        else
        {
            $userId=$_POST["userId"];
        }

        if(empty($_POST["pass"]))
        {
            $passErr="password cannot be empty";
            $hasErr=true;

        }

        else
        {
            $pass=$_POST["pass"];
        }

        if($hasErr)
        {
            header("Location:../view/login.php?idErr=$IdErr&passErr=$passErr");
        }

        else
        {
            $returnedValue=validateUser($userId, $pass);
            if(!$returnedValue)
            {
                header("Location:../view/login.php?invalidUser='Invalid User.'");
            }

            else
            {
                session_start();
                $_SESSION["userId"]=$returnedValue["user_id"];
                $_SESSION["role"]=$returnedValue["role"];

                if($returnedValue["role"]==1)
                {
                    
                    header("location:../view/admin/home.php");
                }

                elseif($returnedValue["role"]==2)
                {
                    header("location:../view/employee/home.php");
                }

                else
                {
                    header("location:../view/client/home.php");
                }
                
            }
        }
    }


?>
