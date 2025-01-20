<h4>total search of <i><?= $_POST["search"]?></i></h4>
<?php
include "run_search.php";
if($_POST["search"]==""){
    echo"<h2> no results found</h2>";
    echo "<h2><a href='new_search.php'>Exit</a><h2>";
}else{
$search=trim($_POST["search"]);

$query=$db->prepare("SELECT * FROM search WHERE  title like '%$search%' OR description like 
 '%$search%'");

 $query->execute(array());
 $control=$query->fetchAll(PDO::FETCH_OBJ);
 $count=$query->rowCount();
 if($count>0){?>
      <table style="font-size:32px;">
        <tr style="color:red;">
            <td>Title</td>
            <td>Description</td>
        </tr>

        <?php
        foreach ($control as $list) {?>
        <tr>
            <td><?php echo $list->title; ?></td>
            <td><?php echo $list->description; ?></td>

        </tr>
       <?php }?>
      </table>
 <h2><a href="new_search.php">Exit</a></h2>

 <?php }else{
    echo"<h2> no results found</h2>";
    echo "<h2><a href='new_search.php'>Exit</a><h2>";
 }
}
?>