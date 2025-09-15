<?php
require_once("db.php");

function validateUser($username, $password) {
    $con = getConnection();
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($con, $sql);
    $user = mysqli_fetch_assoc($result);
    return $user;
}
?>
