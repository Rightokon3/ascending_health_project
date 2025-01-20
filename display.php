<?php
$db=new mysqli("localhost","root","","image");
$result=$db->query("SELECT * FROM image");
while ($row=$result->fetch_assoc()){
    echo '<img src="data:image/jpg;base64,'.
    base64_encode($row['image_data']).'"/>';
}

$db->close();
?>