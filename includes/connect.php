<?php

$hostName = "localhost";
$user = "root";
$pass = "";
$dbName = "blogproject";


$send = isset($_POST['send']);

if (isset($send)) {

    $connect = mysqli_connect($hostName, $user, $pass, $dbName);
    
    $userName = mysqli_real_escape_string($connect, $_POST['userName']);
    $hLabel = mysqli_real_escape_string($connect, $_POST['hLabel']);
    $writingArea = mysqli_real_escape_string($connect, $_POST['writingArea']);




} 






?>