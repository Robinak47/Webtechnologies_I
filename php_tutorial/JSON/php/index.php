<?php
        $student = array("name"=> "Mr. Meow", "cgpa"=> 3.14, "completed_credit"=>104);
        $encoded_student=json_encode( $student);

        $decoded_Student=json_decode($encoded_student);
        echo  $decoded_Student->name."<br>";
        echo  $decoded_Student->cgpa."<br>";
        echo  $decoded_Student->completed_credit;


        $studentList=["Student1"=>["name"=> "Mr. Meow", "cgpa"=> 3.14, "completed_credit"=>104],"Student2"=>["name"=> "Mr. Meow2", "cgpa"=> 4.00, "completed_credit"=>148] ];
        $encoded_studentList=json_encode( $studentList);
        echo $encoded_studentList;

         $decoded_StudentList=json_decode($encoded_studentList);
        echo  $decoded_StudentList->Student1->name."<br>";
        echo  $decoded_StudentList->Student1->cgpa."<br>";
        echo  $decoded_StudentList->Student1->completed_credit;

        echo  $decoded_StudentList->Student2->name."<br>";
        echo  $decoded_StudentList->Student2->cgpa."<br>";
        echo  $decoded_StudentList->Student2->completed_credit;
?>