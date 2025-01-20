<?php require 'connects.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
</head>
<body>
    <table border=1 cellspacing=0 cellpadding=10>
        <tr>
            <td>#</td>
            <td>Name</td>
            <td>image</td>
            
        </tr>
        <tr>
            <?php 
            $i=1;
            $rows=mysqli_query($conn,"SELECT * FROM tb_upload ORDER BY id DESC");
            ?>
            <?php foreach($rows as $row) :?>
                <tr>
                    <td><?php echo $i++;?></td>
                    <td><?php echo $row["name"];?></td>
                    <td><img src="captures/<?php echo $row['image'];?>" alt="" width="200" title="<?php echo $row['image'];?>"></td>
                     <td></td>
                </tr>
                <?php endforeach; ?>
    </table>
    <br>
    <a href="../captures">Upload image </a>
</body>
</html>