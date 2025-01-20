<?php
$db= new mysqli("localhost","root","","image");

if ($_FILES["image"]["error"]==0){
    $imageData=
    addslashes(file_get_contents($_FILES["image"]
    ["tmp_name"]));

    $query="INSERT INTO image (image_data) VALUES ('$imageData')";
    $db->query($query);
}else{
    echo "Error uploading image ";
}
$db->close();
?>

