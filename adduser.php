<?php
include("./connectdb.php");
$Fname=$_POST['Fname'];
$Lname=$_POST['Lname'];
$Address=$_POST['Address'];
$Phone=$_POST['Phone'];
$Email=$_POST['Email'];
$Line=$_POST['Line'];
$User=$_POST['User'];
$Pass1=$_POST['pass1'];
$Pass2=$_POST['pass2'];
$Status=$_POST['Per_Status'];
    $sqls="insert into Person values('','$Fname','$Lname','$Address','$Phone','$Email','$Line','$User','$Pass1','$Pass2','$Status')";
    //$mysqli->query($sqls);
    echo  "insert ok";
    echo $sqls;
?>
<!--<meta http-equiv="refresh" content="0; url=./indexpage.php">
