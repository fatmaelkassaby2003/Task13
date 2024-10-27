<?php 

$sql = "CREATE TABLE IF NOT EXISTS `users`
(
`id` INT PRIMARY KEY AUTO_INCREMENT, 
`name` VARCHAR(150) NOT NULL,
`email` VARCHAR(150) NOT NULL,
`phone` VARCHAR(150) NOT NULL,
`password` VARCHAR(150) NOT NULL,
`role` ENUM('admin','user')  NOT NULL DEFAULT 'user' ,
`created_at`TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

$result = mysqli_query($conn,$sql);

if($result )
{
echo "DONE users";
}