<?php 

$sql = "CREATE TABLE IF NOT EXISTS `categories`
    (
    `id` INT PRIMARY KEY AUTO_INCREMENT, 
    `title` VARCHAR(150) NOT NULL
    )";

    // execution
    $result = mysqli_query($conn,$sql);

    if($result )
    {
        echo "DONE";
    }