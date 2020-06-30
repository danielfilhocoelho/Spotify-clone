<?php
require_once("../../config.php");

if(isset($_POST["playlistId"])){
    $playlistId = $_POST["playlistId"];
    $playlistQuery = mysqli_query($con,"DELETE FROM playlists WHERE id = '$playlistId'");
    $songsQuery = mysqli_query($con,"DELETE FROM playlistSongs WHERE playlistId = '$playlistId'");
}
else{
    echo "Id not passed into the function";
}

?>