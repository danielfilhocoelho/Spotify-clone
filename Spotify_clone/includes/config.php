<?php

ob_start();
session_start();
$timezone = date_default_timezone_set("America/Fortaleza");
$con = mysqli_connect("localhost","phpmyadmin","M1976gbA","slotify");

if(mysqli_connect_errno()){
    echo "Failed to connect" . mysqli_connect_errno();
}





?>