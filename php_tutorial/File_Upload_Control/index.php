<?php
    
    $Err="";
    $hasErr=false;
    if(isset($_POST["submit"]))
    {
        if(!empty($_FILES['imageData']) && ($_FILES['imageData']['error'])==0)
        {
            $allowedType=["image/jpg", "application/pdf"];
            $maxSize=1*1024*1024;
            $fileType=$_FILES['imageData']['type'];
            $fileSize=$_FILES['imageData']['size'];

            if(!in_array($fileType,$allowedType ))
            {
                $Err="Type did not Match.";
                $hasErr=true;
            }

            if( $fileSize>$maxSize)
            {
                $Err="File Size exceeded.";
                $hasErr=true;
            }

            if($hasErr)
            {

            }

            else
            {
                $dir="Upload/";

                if(!is_dir($dir))
                {
                    mkdir($dir);
                }

                $fileName=basename($_FILES['imageData']['name']);
                $targetFile=$dir.$fileName;
                $tmpName=$_FILES['imageData']['tmp_name'];
                move_uploaded_file($tmpName,$targetFile);
                echo "File Moved Successfully";
            }


                


            
        }

        else
        {
            $Err="Please select a file First";
        }

   

        

    }

    

   

    


?>


<!doctype html>
<html>
    <head>
    </head>

    <body>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="imageData">Input Image: </label>
            <input type="file" name="imageData"><br>
            <span name="imageErr" style="color:red;"><?php echo $Err ?></span><br>
            <input type="submit" name="submit" value="submit">
            
        </form>
    </body>

</html>
