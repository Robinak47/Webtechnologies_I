<?php
    require_once("db.php");

    function validateUsers($id, $pass)
    {
        $conn=getConnection();
        $sql="SELECT * FROM user WHERE user_id='$id' AND pass='$pass'";
        $result=mysqli_query($conn, $sql);
        $row=mysqli_fetch_assoc($result);
        return $row;
    }

?>