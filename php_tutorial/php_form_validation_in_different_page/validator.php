<?php

    $nameErr="";
    $emailErr="";
    $genderErr="";
    $fabLangErr="";
    $majorErr="";
    $hasErr=false;

    $name="";
    $email="";
    $gender="";
    $fabLang=[];
    $major="";
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if(empty($_POST["userName"]))
        {
            $nameErr="Name cannot be Empty";
            $hasErr=true;
        }
        else
        {
            $name=$_POST["userName"];
        }

        if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL))
        {
            $emailErr="Given email is not valid";
            $hasErr=true;
        }
        else
        {
            $email=$_POST["email"];
        }

        if(empty($_POST["gender"]))
        {
            $genderErr="Select a Gender";
            $hasErr=true;
        }
        else
        {
            $gender=$_POST["gender"];
        }

        if(empty($_POST["fabLang"]))
        {
            $fabLangErr="Select at least one Fab Lang";
            $hasErr=true;
        }
        else
        {
            $fabLang=$_POST["fabLang"];
        }

        if(empty($_POST["major"]))
        {
            $majorErr="Please select a Major";
            $hasErr=true;
        }
        else
        {
            $major=$_POST["major"];
        }

        if(!$hasErr)
        {
            echo $name."<br>";
            echo $email."<br>";
            echo $gender."<br>";
            foreach($fabLang as $fb)
            {
                echo $fb."<br>";
            }
            echo $major;
        }

        else
        {
            header("Location:index.php?userNameErr=$nameErr&emailErr=$emailErr&genderErr=$genderErr&fabLangErr=$fabLangErr&majorErr=$majorErr");
        }
    }
?>
