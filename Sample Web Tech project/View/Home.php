<?php
require_once("session.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['user']; ?>!</h2>
    
    <ul>
        <li><a href="AddCar.php">Add Car</a></li>
        <li><a href="CarList.php">Car List</a></li>
        <li><a href="Logout.php">Logout</a></li>
    </ul>
</body>
</html>
