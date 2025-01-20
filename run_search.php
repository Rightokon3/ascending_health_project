<?php
try{
    $db=new PDO("mysql:host=localhost;dbname=search;charset=utf8","root","");
}catch(PDOException $e){
    echo $e->getMessage();
}
?>