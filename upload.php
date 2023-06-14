<?php
require "connection.php";


$app = (new Database())->db;

$userName=$_POST["userName"];
// echo $userName
$image = $_FILES["userPhoto"];

// var_dump($userName);

//var_dump($image);

if($userName !="" && $image['name']!=""){
    $file_path="storepath/".$image['name'];
    move_uploaded_file($image["tmp_name"],$file_path);
    // var_dump($photo);

    $insert = $app->query("INSERT INTO uploaddetails (name,image)VALUES('$userName','$file_path')");
//    header('location: /');
}
else{
     echo "not";

//    header('location:/');
}
