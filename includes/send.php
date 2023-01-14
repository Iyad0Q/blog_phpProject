<?php

include "includes/connect.php";


if (empty($userName)) {
    echo "the input of user name  is empty";
}
elseif (empty($hLabel)) {
    echo "the input of label  is empty";
}
elseif (empty($writingArea)) {
    echo "the writing area is empty";
} elseif (strlen($userName) < 3) {
    echo "your user name is very short";
}
 elseif (strlen($hLabel) < 3) {
    echo "the label is very short";
}
elseif (strlen($writingArea) < 10) {
    echo "your post is very short";
}
else {
    $insert = "INSERT INTO postdata(userName, hLabel, writingArea) VALUES ('$userName', '$hLabel', '$writingArea')";
    $query = mysqli_query($connect, $insert);

    if ($query) {
        echo "done !";
    }
}



?>