<?php 

$sql = "CREATE TABLE IF NOT EXISTS `posts`
    (
    `id` INT PRIMARY KEY AUTO_INCREMENT, 
    `title` VARCHAR(150) NOT NULL,
    `content` TEXT NOT NULL,
    `created_at`TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

$result = mysqli_query($conn,$sql);

if($result )
{
    echo "DONE posts";
}
