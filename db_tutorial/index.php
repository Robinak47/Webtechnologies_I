<?php
    $host="127.0.0.1";
    $user="root";
    $pass="";
    $dbName="car_management_system";
    $port=3308;

    $conn= mysqli_connect($host,$user,$pass, $dbName,$port);

    if(!$conn)
    {
        echo "connection failed. ".mysqli_connect_error();
        echo var_dump($conn);
    }

    else
    {
        echo "connection succefull";
        //echo var_dump($conn);
    }


    //create database
    /*
    $sql="CREATE DATABASE myStudentDB";

    $outcome=mysqli_query($conn,$sql);
    //echo var_dump($outcome);
    if($outcome==true)
    {
        echo "<br>"."Database Created successfully";
    }

    else
    {
        echo "<br> failed".mysqli_error($conn);
    }
        */

    //table creation
    /*$sql = "CREATE TABLE Importer (
        id VARCHAR(30) PRIMARY KEY,
        importer_name VARCHAR(30) NOT NULL,
        current_address VARCHAR(30) NOT NULL,
        email VARCHAR(50))";

    $outcome=mysqli_query($conn, $sql);

    if($outcome)
    {
        echo "<br>"."table created successfully";
    }

    else
    {
        echo "<br>". "failed".mysqli_error($conn);
    }*/

    //insert //

    /*$sql = "INSERT INTO Importer (id, importer_name, current_address, email) VALUES ('im3', 'car_importer', 'kuril, dhaka ', 'john@example.com')";

    $outcome=mysqli_query($conn, $sql);

    if($outcome)
    {
        echo "<br>"."data inserted successfully";
        echo mysqli_affected_rows($conn);
    }

    else
    {
        echo "<br>". "failed".mysqli_error($conn);
    }*/

        /*multi query
    $sql = "INSERT INTO Importer (id, importer_name, current_address, email) VALUES ('im10', 'car_importer', 'kuril, dhaka ', 'john@example.com');";
    $sql.="INSERT INTO Importer (id, importer_name, current_address, email) VALUES ('im12', 'car_importer', 'kuril, dhaka ', 'john@example.com');";
    $sql.="INSERT INTO Importer (id, importer_name, current_address, email) VALUES ('im13', 'car_importer', 'kuril, dhaka ', 'john@example.com');";
    $outcome=mysqli_multi_query($conn, $sql);

    if($outcome)
    {
        echo "<br>"."data inserted successfully";
        echo mysqli_affected_rows($conn);
    }

    else
    {
        echo "<br>". "failed".mysqli_error($conn);
    }

    */

    /* delete */
   /* $sql = "DELETE FROM Importer WHERE id='im1'";
    $outcome=mysqli_query($conn, $sql);

    if($outcome)
    {
        echo "<br>"."data deleted successfully";
        echo mysqli_affected_rows($conn);
    }

    else
    {
        echo "<br>". "failed".mysqli_error($conn);
    }*/

    //update//
    /*$sql = "UPDATE Importer SET importer_name='my_car_importer' WHERE id='im10'";
    $outcome=mysqli_query($conn, $sql);

    if($outcome)
    {
        echo "<br>"."data updated successfully";
        echo mysqli_affected_rows($conn);
    }

    else
    {
        echo "<br>". "failed".mysqli_error($conn);
    }*/

    //select //
    
    $sql="SELECT * FROM Importer";
    $outcome=mysqli_query($conn, $sql);
    echo var_dump($outcome);
    echo "<br>".mysqli_num_rows($outcome);

    if(mysqli_num_rows($outcome)>0)
    {
        while($row=mysqli_fetch_assoc($outcome))
        {
            echo "<br>"."id: ".$row["id"]."importer_name: ".$row["importer_name"]."current_address: ".$row["current_address"]."email: ".$row["email"];
        }
    }
    mysqli_close($conn);
    

    
?>