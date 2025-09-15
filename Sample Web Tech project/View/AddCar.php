<?php
require_once("session.php");
//session_start();
$errors = $_SESSION['errors'] ?? [];
unset($_SESSION['errors']);
$message = $_GET['message'] ?? '';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Car</title>
</head>
<body>
    <h2>Add New Car</h2>

    <?php if (!empty($errors)): ?>
        <ul style="color:red;">
            <?php foreach ($errors as $e): ?>
                <li><?php echo htmlspecialchars($e); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <?php if ($message): ?>
        <p style="color:green;"><?php echo htmlspecialchars($message); ?></p>
    <?php endif; ?>

    <form action="../Controller/AddCarValidation.php" method="post">
        Car ID: <input type="text" name="Car_Id"><br><br>
        Model: <input type="text" name="Model"><br><br>
        Person ID: <input type="text" name="Person_Id"><br><br>
        <input type="submit" name="add" value="Add Car">
    </form>

    <br>
    <a href="Home.php">Back to Home</a>
</body>
</html>
