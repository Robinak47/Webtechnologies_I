<?php
require_once("db.php");

function insertCar($car) {
    $con = getConnection();
    $sql = "INSERT INTO car (Car_Id, Model, Person_Id)
            VALUES ('{$car['Car_Id']}', '{$car['Model']}', '{$car['Person_Id']}')";
    return mysqli_query($con, $sql);
}

function fetchAllCars() {
    $con = getConnection();
    $sql = "SELECT * FROM car";
    $result = mysqli_query($con, $sql);
    $cars = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $cars[] = $row;
    }

    return $cars;
}

function removeCar($carId) {
    $con = getConnection();
    $sql = "DELETE FROM car WHERE Car_Id = '$carId'";
    return mysqli_query($con, $sql);
}

function fetchCarById($carId) {
    $con = getConnection();
    $sql = "SELECT * FROM car WHERE Car_Id = '$carId'";
    $result = mysqli_query($con, $sql);
    return mysqli_fetch_assoc($result);
}

function updateCarInDb($car) {
    $con = getConnection();
    $sql = "UPDATE car SET 
                Model = '{$car['Model']}', 
                Person_Id = '{$car['Person_Id']}'
            WHERE Car_Id = '{$car['Car_Id']}'";
    return mysqli_query($con, $sql);
}
?>