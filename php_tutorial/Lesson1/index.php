<!doctype html>
<html>
    <head>
    </head>

    <body>
        <h1> Hello There</h1>
        <?php echo "meow meow" ;?>
        <?php echo "<br> <span style='color: Red;'> Say my name </span><br>"; ?>
        <?php
        
        $num1="meow Meow";
        echo $num1."<br>";
        echo var_dump($num1);

        function sayMyName($name)
        {
            global $num1;
            echo $name;
            echo "<br>".$num1;
        }

        sayMyName("<br> Alam");
       

        function counter()
        {
            static $count=0;
            echo "<br>$count";
            $count++;
        }

        counter();
        counter();
        counter();

        $num2=20;
        $num3=20.0;
        echo "<br>".($num2%$num3)."<br>";

        if($num2> $num3)
        {
            echo "num2 is grater";
        }
        elseif ($num2===$num3)
        {
            echo "numbers are equal";
        }
        else
        {
            echo "num3 is grater";
        }
        
        
        ?>
    </body>
</html>
