<?php
session_start();
require_once("CarController.php");

$car = [
    'Car_Id' => $_POST['Car_Id'] ?? '',
    'Model' => $_POST['Model'] ?? '',
    'Person_Id' => $_POST['Person_Id'] ?? ''
];

$errors = [];

if (empty($car['Car_Id'])) {
    $errors[] = "Car ID is required.";
} elseif (!preg_match('/^[A-Za-z0-9\-]+$/', $car['Car_Id'])) {
    $errors[] = "Car ID must be alphanumeric.";
}

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
    header("Location: ../View/AddCar.php");
    exit;
} else {
    $success = addCar($car);
    $msg = $success ? "Car added successfully." : "Failed to add car.";
    header("Location: ../View/AddCar.php?message=" . urlencode($msg));
    exit;
}
