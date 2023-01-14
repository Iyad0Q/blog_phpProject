<?php

error_reporting(E_ERROR | E_PARSE);
include "includes/style.php";
include "includes/connect.php";


$select = "SELECT * FROM postdata";
$query2 = mysqli_query($connect, $select);
$posts = mysqli_fetch_all($query2, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>
<body>

    <header>
        <h1>Blog website</h1>
        <br>
        <a id="addPost" href="wBlog.php">make a new post</a>
    </header>

    <main>

        <div class="containerPost">
            <h2 id="label">label</h2>
            <br>
            <h3 id="name"> user name</h3>
            <br>
            <div id="post">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
        </div>


        <?php


        foreach ($posts as $post) { $labelPost = htmlspecialchars($post["hLabel"]); }
        foreach ($posts as $post) { $userPost = htmlspecialchars($post["userName"]); } 
        foreach ($posts as $post) { $textPost = htmlspecialchars($post["writingArea"]); }
        
        foreach ($posts as $post) {
            echo "
            
            <div class='containerPost'>
            <h2 id='label'>". htmlspecialchars($post["hLabel"]) ."</h2>
                <br>
                <h3 id='name'>". htmlspecialchars($post["userName"]) ."</h3>
                <br>
                <div id='post'>". htmlspecialchars($post["writingArea"]) ."</div>
            </div>
        
            ";
        }

        
        
        
        
        ?>






    </main>
    
</body>
</html>