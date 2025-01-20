<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="font-awesome-master/css/font-awesome.min.css">
    <title>search</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        body{
            background:purple;

        }
        .search-box{
            border:3px solid #000;
            border-radius:100vh 100vh;
            width:350px;
            position: absolute;
            top:30%;
            left:35%;
            background-color:#ffd000;
            box-sizing:border-box;
         
        }
        input{
            width: 280px;
            height:50px;
            border-radius:100vh 0 150vh 100vh;
            border:none;
            outline:none;
            padding:0 10px;
        }
        i{
            padding:10px 5px;

        }
        button{
            border:none;
            background-color:#ffd000;
            outline:none;
            cursor: pointer;

        }
    </style>
</head>
<body>
    <div class="search-box">
        <form action="real_search.php" method="post">
            <input type="text" name="search" id="" placeholder="search here" required>
            <button><i class="fa fa-search"></i></button>
        </form>
    </div>
</body>
</html>