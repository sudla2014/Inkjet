<?php
session_start();
include("connectdb.php");
$user=$_POST['user'];
$pass=$_POST['pass'];
	$sqls="select * from Person where Per_User='$user'";
	$results = $mysqli->query($sqls) or die($mysqli->error.__LINE__);
	$rowofmember2=$results->num_rows;
	while($row = mysqli_fetch_array($results)) {
		$Per_Id= $row["Per_Id"];
		$Per_Fname= $row["Per_Fname"];
		$Per_Lname= $row["Per_Lname"];
		$Per_User= $row["Per_User"];
		$Per_Pass= $row["Per_Pass"];
		$Per_Status= $row["Per_Status"];
		}
		if($user==""){
		      echo "<script language=\"JavaScript\" type=\"text/JavaScript\">alert('ไม่มีผู้ใช้ในระบบ')</script>";
			echo "<meta http-equiv=\"refresh\" content=\"0; url=./indexpage.php?error=กรุณากรอกรหัสผู้ใช้\">";
		}else if($rowofmember2<=0){
		      echo "<script language=\"JavaScript\" type=\"text/JavaScript\">alert('ไม่มีผู้ใช้ในระบบ')</script>";
			echo "<meta http-equiv=\"refresh\" content=\"0; url=./indexpage.php?error=ไม่มีผู้ใช้ในระบบ\">";
		}else if($pass==$Per_Pass){
			$_SESSION['user']=$Per_Fname." ".$Per_Lname;
			$_SESSION['status']=$Per_Status;
			$_SESSION['userFname']=$Per_Fname;
			$_SESSION['Userid']=$Per_Id;
			$name=$_SESSION['user'];
			if($Per_Status=="1"){
				echo "<script language=\"JavaScript\" type=\"text/JavaScript\">alert('ยินดีต้อนรับเข้าสู่ระบบ' )</script>";
			echo "<meta http-equiv=\"refresh\" content=\"0; url=./ui_admin.php\">";

			}else if($Per_Status=="2"){
				echo "<script language=\"JavaScript\" type=\"text/JavaScript\">alert('ยินดีต้อนรับเข้าสู่ระบบ')</script>";
			echo "<meta http-equiv=\"refresh\" content=\"0; url=./ui_customer.php\">";
			}else{
				echo "<script language=\"JavaScript\" type=\"text/JavaScript\">alert('ยินดีต้อนรับเข้าสู่ระบบ')</script>";
			echo "<meta http-equiv=\"refresh\" content=\"0; url=./ui_employee.php\">";
			}
		}
		else {
		echo "<script language=\"JavaScript\" type=\"text/JavaScript\">alert('ไม่มีผู้ใช้ในระบบ')</script>";
		echo "<meta http-equiv=\"refresh\" content=\"0; url=./indexpage.php?error=รหัสผ่านผิด\">";
	}
?>
