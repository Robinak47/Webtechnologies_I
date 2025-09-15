<?php
require_once("session.php");
require_once("../Controller/CarController.php");

$carId = $_GET['Car_Id'] ?? '';
$car = getCarById($carId);

//session_start();
$errors = $_SESSION['errors'] ?? [];
unset($_SESSION['errors']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Car</title>
</head>
<body>
    <h2>Update Car</h2>

    <?php if (!$car): ?>
        <p style="color:red;">Car not found!</p>
        <a href="CarList.php">Back</a>
        <?php exit; ?>
    <?php endif; ?>

    <?php if (!empty($errors)): ?>
        <ul style="color:red;">
            <?php foreach ($errors as $e): ?>
                <li><?php echo htmlspecialchars($e); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form action="../Controller/UpdateCarValidation.php" method="post">
        <input type="hidden" name="Car_Id" value="<?= htmlspecialchars($car['Car_Id']) ?>">
        Model: <input type="text" name="Model" value="<?= htmlspecialchars($car['Model']) ?>"><br><br>
        Person ID: <input type="text" name="Person_Id" value="<?= htmlspecialchars($car['Person_Id']) ?>"><br><br>
        <input type="submit" name="update" value="Update Car">
    </form>

    <br>
    <a href="CarList.php">Back to Car List</a>
</body>
</html>
