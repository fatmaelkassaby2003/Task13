<?php 
    $conn = mysqli_connect("localhost","root","","clean_blog");

    if(!$conn)
    {
        die("connection faild".mysqli_connect_error());
    }
    
    require_once('categories.table.php');
    require_once('posts.table.php');
    require_once('users.table.php');
    require_once('messages.table.php');


