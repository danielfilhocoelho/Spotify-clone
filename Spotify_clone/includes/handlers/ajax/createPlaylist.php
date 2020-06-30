<?php
require_once("../../config.php");
if(isset($_POST["name"]) && isset($_POST["username"])){
    $name = $_POST["name"];
    $username = $_POST["username"];
    $date = date("Y-m-d H:i:s");
    $query = mysqli_query($con,"INSERT INTO playlists VALUES (null,'$name','$username','$date')");

}
else{
    echo "Name or username not passed into file";
    exit();
}


?>