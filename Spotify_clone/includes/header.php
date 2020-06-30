<?php

require_once("includes/config.php");
require_once("includes/classes/User.php");
require_once("includes/classes/Artist.php");
require_once("includes/classes/Album.php");
require_once("includes/classes/Song.php");
require_once("includes/classes/Playlist.php");

if(isset($_SESSION["userLoggedIn"])){


    $userLoggedIn = new User($con,$_SESSION["userLoggedIn"]);
    echo "<script>userLoggedIn = '".$userLoggedIn->getUsername()."';</script>"; // Enviando variáveis entre as linguagens

}

else{
    header("Location: register.php");
}


?>
<!doctype html>
<html>
<head>
<title></title>
<link rel = "stylesheet" type = "text/css" href = "assets/css/style.css">
<!-- JQuery import -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type = "text/javascript" src = "assets/js/script.js"></script>
</head>
<body>


    <div id = "mainContainer">
        <div id = "topContainer">
            <?php require_once("includes/navBarContainer.php");?>
            <div id = "mainViewContainer">
                <div id = "mainContent">