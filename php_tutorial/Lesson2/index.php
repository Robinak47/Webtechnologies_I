<?php
 for($i=1;$i<11;$i++)
 {
    echo $i."<br>";
 }

 $k=11;
 while($k<21)
 {
    print($k."<br>");
    $k++;
 }

 do
 {
    print($k."<br>");
    $k++;
 }while($k<31);

 //Working with array
   $arr=array(1,2,3);
   echo var_dump($arr)."<br>";
   print_r($arr);

   echo "<br>";
   $arr2=array(1,2.03,"Name");
   echo var_dump($arr2)."<br>";
   print_r($arr2);

   echo "Printing array";

   foreach($arr2 as $value)
   {
        echo "<br>".$value."<br>";
   }

   for($i=0;$i<count($arr2);$i++)
   {
     echo "<br>".$arr2[$i];
   }

   $student=[
    "id"=>"2yt63ui",
    "name" => "Mr. Meow",
    "cgpa" => 3.49
   ]; 

   foreach($student as $key=>$value)
   {
     echo "<br>".$key." having the value ".$value;
   }

   


   $arr3=[
    "key1" => ["apple", "Banana", "Mango"],
    "key2" => ["Ball", "Bat", "Stump"]

   ];

   foreach($arr3 as $key=>$value)
   {
    echo "<br>".$key;
    foreach($value as $v1)
    {
        echo "<br>".$v1;
    }
   }

   $arr4=[
    "key1" => ["1" => "Cat", "2" => "Dog"], "key2" => ["3"=> "Tiger", "4"=>"Lion"]
    ];

    foreach($arr4 as $key=>$value)
    {
        echo "<br>".$key;
        foreach($value as $k1 => $v1)
        {
           echo "<br>".$k1." having the value ".$v1; 
        }
    }

    $arr5=['k',"l","m"];

    foreach($arr5 as $a)
    {
        echo "<br>".$a;
    }


    $arr6=[[1,2,3],[4,5]];

    echo "<br>";
    for($i=0;$i<count($arr6);$i++)
    {
        for($j=0;$j<count($arr6[0]);$j++)
        {
            echo $arr6[$i][$j]." ";
        }

        echo "<br>";
    }


    $s1="101";
    $s2=strrev($s1);

    if($s1==$s2)
    {
        echo "<br> Palindrom";
    }

    else
    {
        echo "<br> Not Palindrom";
    }

    echo "<br>".str_replace("10","101", $s1);








 /*

 */

?>