<?php 

error_reporting(E_ERROR | E_PARSE);
include "includes/connect.php";
include "includes/send.php";
include "includes/style.php";


?>



<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog website | write a post</title>
</head>
    <body>

        <main>

            <form action="wBlog.php" method="post">

                <h2>Creat a new post</h2>

                <input type="text" name="userName" id="userName" placeholder="Enter your user name">

                <br>
                <input type="text" name="hLabel" id="hLabel" placeholder="Enter the post label">

                <br>
                <textarea name="writingArea" id="writingArea" placeholder="What do you think ?"></textarea>

                <br>
                <input type="submit" name="send" id="send">

            </form>

            <br>

            <a href="home.php">back to home page</a>

        </main>
        
    </body>
</html>