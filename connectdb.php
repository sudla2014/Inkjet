<?php
//connect database
$mysqli = mysqli_connect("localhost", "root", "", "champinkjet");
if (mysqli_connect_errno($mysqli)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
//set language
$mysqli->query("SET NAMES utf8");
?>