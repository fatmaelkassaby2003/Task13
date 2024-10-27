<?php 
    $conn = mysqli_connect("localhost","root","","clean_blog");

    if(!$conn)
    {
        die("connection faild".mysqli_connect_error());
    }

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

    $sql = "CREATE TABLE IF NOT EXISTS `posts`
    (
    `id` INT PRIMARY KEY AUTO_INCREMENT, 
    `title` VARCHAR(150) NOT NULL,
    `content` TEXT NOT NULL,
    `created_at`TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
?>