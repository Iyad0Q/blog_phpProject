<?php

$hostName = "localhost";
$user = "root";
$pass = "";
$dbName = "blogproject";



if (isset($_Post['send'])) {

    $userName = $_Post['userName'];
    $hLabel = $_Post['hLabel'];
    $writingArea = $_Post['writingArea'];

    $connect = mysqli_connect($hostName, $user, $pass, $dbName);

    if(!$connect) {
        echo "We have a problem";
    }

}






?>