<?php


$send = isset($_POST['send']);

if (isset($send)) {

    $userName = $_POST['userName'];
    $hLabel = $_POST['hLabel'];
    $writingArea = $_POST['writingArea'];

    $hostName = "localhost";
    $user = "root";
    $pass = "";
    $dbName = "blogproject";

    $connect = mysqli_connect($hostName, $user, $pass, $dbName);
    $insert = "INSERT INTO postdata(userName, hLabel, writingArea) VALUES ('$userName', '$hLabel', '$writingArea')";
    $query = mysqli_query($connect, $insert);



} 






?>