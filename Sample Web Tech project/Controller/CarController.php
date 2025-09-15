<?php
require_once("../Model/carModel.php");

function addCar($car) {
    return insertCar($car);
}

function getAllCar() {
    return fetchAllCars();
}

function deleteCar($carId) {
    return removeCar($carId);
}

function getCarById($carId) {
    return fetchCarById($carId);
}

function updateCar($car) {
    return updateCarInDb($car);
}

if (isset($_GET['delete'])) {
    $carId = $_GET['delete'];
    $success = deleteCar($carId);
    $msg = $success ? "Car deleted successfully." : "Failed to delete car.";
    header("Location: ../View/CarList.php?message=" . urlencode($msg));
    exit;
}
?>