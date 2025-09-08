<?php
    setcookie("userName",$_POST["userName"], time()-300);

    header("Location:login.php");

?>