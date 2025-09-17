<?php
    require_once("../model/userModel.php");

    function validateUser($id, $pass)
    {
        return validateUsers($id, $pass);
    }

?>