<?php
session_start();
require_once("CarController.php");

$car = [
    'Car_Id' => $_POST['Car_Id'] ?? '',
    'Model' => $_POST['Model'] ?? '',
    'Person_Id' => $_POST['Person_Id'] ?? ''
];

$errors = [];

if (empty($car['Model'])) {
    $errors[] = "Model is required.";
} elseif (strlen($car['Model']) < 2) {
    $errors[] = "Model name must be at least 2 characters.";
}

if (empty($car['Person_Id'])) {
    $errors[] = "Person ID is required.";
}

if (count($errors) > 0) {
    $_SESSION['errors'] = $errors;
    header("Location: ../View/UpdateCar.php?Car_Id=" . urlencode($car['Car_Id']));
    exit;
} else {
    $success = updateCar($car);
    $msg = $success ? "Car updated successfully." : "Failed to update car.";
    header("Location: ../View/CarList.php?message=" . urlencode($msg));
    exit;
}
