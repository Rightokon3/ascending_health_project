<?php
$conn = mysqli_connect("localhost", "root", "", "verify_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['id'])) {
    $productId = $_GET['id'];
    $result = mysqli_query($conn, " SELECT FROM images WHERE id=$productId");
    $product = mysqli_fetch_assoc($result);
} else {
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
</head>
<body>
<img src="<?php  echo $product['images']; ?>" /> 
</body>
</html>

