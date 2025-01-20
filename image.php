<?php
require 'connects.php';
if(isset($_POST["submit"])){
    $name=$_POST["name"];

    if($_FILES["image"]["error"]===4){
        echo
        "<script> alert('image does not exit');</script>"
        ;
    }
    else{
        $fileName=$_FILES["image"]["name"];
        $fileSize=$_FILES["image"]["size"];
        $tmpName=$_FILES["image"]["tmp_name"];

        $vaildImageExtension=['jpg','jpeg','png'];
        $imageExtension=explode('.',$fileName);
        $imageExtension=strtolower(end($imageExtension));
        
        if(!in_array($imageExtension, $vaildImageExtension)){
            echo
            "<script> alert('invalid image extension');</script>"
            ;
        }
        else if($fileSize > 1000000){
            echo
            "<script> alert('the image is too large');</script>"
            ;
        }
        else{
            $newImageName=uniqid();
            $newImageName .= '.' . $imageExtension;

                move_uploaded_file($tmpName, 'captures/'. $newImageName);
                $query="INSERT INTO tb_upload VALUES('','$name','$newImageName')";
                mysqli_query($conn, $query);
                echo
                "<script> alert('successfully uploaded');
                document.location.href='data.php';
                </script>"
                ;
            
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <form action="" method="post" autocomplete="off" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required value=""> <br>
        <label for="image">IMAGE:</label>
<input type="file" name="image" id="image" accept=".jpg, .jpeg, .png" value=""><br><br>
<button type="submit" name="submit">submit</button>
    </form>
    <br>
    <a href="data.php">data</a>
</body>
</html>