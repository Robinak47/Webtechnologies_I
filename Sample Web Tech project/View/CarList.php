<?php
require_once("session.php");
require_once("../Controller/CarController.php");
$cars = getAllCar();

$message = $_GET['message'] ?? '';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Car List</title>
</head>
<body>
    <h2>All Cars</h2>

    <?php if ($message): ?>
        <p style="color:green;"><?php echo htmlspecialchars($message); ?></p>
    <?php endif; ?>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Car ID</th>
                <th>Model</th>
                <th>Person ID</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($cars): ?>
                <?php foreach ($cars as $car): ?>
                    <tr>
                        <td><?= htmlspecialchars($car['Car_Id']) ?></td>
                        <td><?= htmlspecialchars($car['Model']) ?></td>
                        <td><?= htmlspecialchars($car['Person_Id']) ?></td>
                        <td>
                            <a href="UpdateCar.php?Car_Id=<?= urlencode($car['Car_Id']) ?>">Update</a> |
                            <a href="../Controller/CarController.php?delete=<?= urlencode($car['Car_Id']) ?>" onclick="return confirm('Are you sure to delete?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="4">No cars found.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>

    <br>
    <a href="Home.php">Back to Home</a>
</body>
</html>
