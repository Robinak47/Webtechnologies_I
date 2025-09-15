<?php
session_start();
require_once("../Model/userModel.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = validateUser($username, $password);

    if ($user) {
        $_SESSION['user'] = $user['username'];
        header("Location: ../View/Home.php");
    } else {
        header("Location: ../View/Login.php?error=Invalid username or password");
    }
}
?>
