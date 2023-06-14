


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="text" placeholder="user name" name="userName"><br>
        <br>
        <input type="file" name="userPhoto"><br>
        <br>
        <input type="submit" value="upload"><br>
    </form>
</body>
</html>


<?php

require "connection.php";

$app = (new Database())->db;

$all = $app->query("SELECT * FROM uploaddetails");
$all = $all->fetchAll();


foreach ($all as $key=>$value){
    ?>

    <div>
        <h2><?php echo $value["name"]?></h2>
        <img style="height:100px;" src="<?php echo $value["image"]?>">
    </div>

    <?php
}