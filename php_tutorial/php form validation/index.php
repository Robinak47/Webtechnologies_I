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
    }
?>

<!doctype html>
<html>
    <head>
    </head>

    <body>
        <form action="" method="POST">
            <lable for="userName"> User Name:</label>
            <input type="Text" id="userName" name="userName"><br>
            <span style="color:red;"   name="nameErr"><?php echo $nameErr; ?></span><br>
            
            <label for="email"> Email: </label>
            <input type="text" id="email" name="email"><br>
            <span style="color:red;" name="emailErr"><?php echo $emailErr; ?></span><br>


            <label for="gender"> Gender: </label>
            <input type="radio" id="maleRB" name="gender" value="male">Male<br>
            <input type="radio" id="femaleRB" name="gender" value="female">Female<br>
            <span style="color:red;" name="genderErr"><?php echo $genderErr; ?></span><br>

            <label for="fabLang"> Fab Lang: </label>
            <input type="checkbox" id="c#CMB" name="fabLang[]" value="C#">C#
            <input type="checkbox" id="pythonCMB" name="fabLang[]" value="Python">Python
            <input type="checkbox" id="javaCMB" name="fabLang[]" value="Java">java<br>
            <span name="fabLangErr" style="color:red;"><?php echo $fabLangErr; ?></span><br>


            <label for="major"> Major: </label>
            <select name="major">
                <option id="noValue" value=""> Please Select an option</option> 
                <option id="Data Science" value="Data Science"> Data Science</option> 
                <option id="Software Engineering" value="Software Engineering"> Software Engineering</option> 
            </select><br>
            <span name="majorErr" style="color:red;"><?php echo $majorErr; ?></span><br>

            <input type="submit" name="submit" value="submit">

        </form>
    </body>
</html>
