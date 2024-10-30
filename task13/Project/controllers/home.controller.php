<?php 
require_once(BASE_PATH.'data/connection.php');
$sql = "SELECT * FROM `posts` LIMIT 10";

$posts =mysqli_query($conn,$sql);


$all_data=map_data($posts);
require_once BASE_PATH.'views/home.views.php';