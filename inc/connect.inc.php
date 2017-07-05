<?php


// 1. Create a database connection
$connection = mysqli_connect("localhost","root","bzg7zxu0");
if (!$connection) {
    die("Database connection failed: " . mysqli_error());
}

// 2. Select a database to use 
$db_select = mysqli_select_db($connection,"inwheel");
if (!$db_select) {
    die("Database selection failed: " . mysqli_error());
}
?>