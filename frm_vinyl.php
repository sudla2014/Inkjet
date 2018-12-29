<?php
include("./connectdb.php");
session_start();
$temp = explode('.',$_FILES['Uploadimg']['name']);
$newName = substr(md5(mt_rand()),0,10).'.'.end($temp);

move_uploaded_file($_FILES['Uploadimg']['tmp_name'], 'uploads/'.$newName);
$Per_Id=$_SESSION['Userid'];
$Pr_Name=$_POST['Pr_Name'];
$Material_Name=$_POST['Material_Name'];
$format_width=$_POST['custom_format_width'];
$format_height=$_POST['custom_format_height'];
$Style_Name=$_POST['Style_Name'];
$Format_Name=$_POST['Format_Name'];
$Color_Name=$_POST['Color_Name'];
$Pr_WorkDay=date("Y-m-d");
$date1 = str_replace('-', '/',date("Y-m-d"));
$Pr_ReceiveDay=date("Y-m-d",strtotime($date1 . "+4 days"));
if(isset($_POST['inlineRadioOptions'])){
    $inlineRadioOptions=$_POST['inlineRadioOptions'];
}
$specifyNumber=$_POST['specifyNumber'];
$DetailWork=$_POST['Detail_Work'];
if($inlineRadioOptions=="" || $format_width=="" ||$format_height=="" ){
    $Pr_Details="  ประเภทวัสดุ  ".$Material_Name." ลักษณะ ".$Style_Name." รูปแบบ ".$Format_Name." สี ".$Color_Name." จำนวนที่ต้องการ ".$specifyNumber."";
}else if( $format_width=="" ||$format_height==""){
    $Pr_Details="  ประเภทวัสดุ  ".$Material_Name." ลักษณะ ".$Style_Name." รูปแบบ ".$Format_Name." สี ".$Color_Name." จำนวนที่ต้องการ ".$inlineRadioOptions." จำนวนที่ต้องการ ".$specifyNumber."";
}else if($specifyNumber==""|| $Format_Name=="ไม่กำนดรูปแบบ"){
    $Pr_Details="  ประเภทวัสดุ  ".$Material_Name." ลักษณะ ".$Style_Name." รูปแบบกำหนดเอง "."กว้าง ".$format_width."ตร.ชม."." สูง ".$format_height."ตร.ชม."." สี ".$Color_Name." จำนวนที่ต้องการ ".$inlineRadioOptions."";
}else if($specifyNumber==""||$format_width=="" ||$format_height==""){
    $Pr_Details="  ประเภทวัสดุ  ".$Material_Name." ลักษณะ ".$Style_Name." รูปแบบ ".$Format_Name." สี ".$Color_Name." จำนวนที่ต้องการ ".$inlineRadioOptions." จำนวนที่ต้องการ ".$specifyNumber."";
}
echo $Pr_WorkDay."<br>";
echo $Pr_ReceiveDay."<br>";
echo $Pr_Name.""."<br>";
echo $Material_Name." "."<br>";
echo $format_width." "."<br>";
echo $format_height." "."<br>";
echo $Style_Name.""."<br>";
echo $Format_Name." "."<br>";
echo $Color_Name." "."<br>";
echo $inlineRadioOptions." "."<br>";
echo $specifyNumber." "."<br>";
echo $DetailWork." "."<br>";
echo $Pr_Details." "."<br>";
echo $Cus_Id." "."<br>";
echo $newName;
$sqls="insert into Product values('','$Pr_Name','$Pr_Details','$Pr_WorkDay','$Pr_ReceiveDay','','','$Per_Id','4')";
$mysqli->query($sqls);
echo $sqls;
?>
<!--<meta http-equiv="refresh" content="0; url=./ui_customer.php">
