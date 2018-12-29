<?php include"./head.php"?>
<?php include"./connectdb.php"?>
<?php include"./menuadmin.php"?>
<?php include"pagination_function.php"?>

  <div class="page-header header-filter clear-filter purple-filter" data-parallax="true" style="background-image: url('./assets/img/bg2.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <div class="brand">
            <h1>CHAMP-INKJET</h1>
            <h3>งานผลิต ไวนิล สติ๊กเกอร์ใส สติ๊กเกอร์ขาวเงา สติ๊กเกอร์ขาวด้าน สติ๊กเกอร์ผ้า ซีทรู งานโรงพิมพ์ นามบัตร งานหนังสือ/วารสาร/งานเข้าเล่ม/งานถ่ายเอกสาร งานติดตั้ง งานรื้อถอน วัดหน้างาน ฟิวเจอร์บอร์ด โฟมบอร์ด บริการขนส่ง งานด่วน งานส่งต่อ(งานโรงพิมพ์ ร้านสกรีนเสื้อ)</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
<div class="card card-nav-tabs text-center">
  <div class="card-header card-header-danger">
	  <p class="h4">จัดการรับงาน</p>
  </div>
<div class="container col-sm-10">
  <div class="card-body">
    <div class="row">
      <div class="col-sm-9">

    <form name="form1" method="get" action="">
	<div class="form-row">
		<div class="form-group col-sm-4">
		  <input type="text" class="form-control" name="keyword" id="keyword"
		   value="<?=(isset($_GET['keyword']))?$_GET['keyword']:""?>">
			</div>
			<div class="form-group">
        <button type="submit" class="btn btn-white btn-just-icon btn-round" name="btn_search" id="btn_search">
          <i class="material-icons">search</i>
        </button>
		</div>
	</div>
	</form>
		   </div>
		</div>
	  </div>
	<div class="table-responsive">
<table class="table table-striped table-hover table-sm">
	<thead>
				<th>ลำดับที่</th>
			 <th>ชื่อผลิตภัณฑ์</th>
			 <th>ชื่อลูกค้า</th>
			  <th>รายละเอียดงาน</th>
			 <th>Artwork</th>
			 <th>สถานะ</th>
			 <th>วันที่</th>
			 <th>QRCode</th>
			<th>จัดการ</th>
		</thead>
	<tbody>
		<?php
$num = 0;
	$sql = "
SELECT * FROM person INNER JOIN product ON person.Per_Id=product.Per_Id
";

// เงื่อนไขสำหรับ input text
if(isset($_GET['keyword']) && $_GET['keyword']!=""){
    // ต่อคำสั่ง sql
    $sql.=" AND Per_Fname LIKE '%".trim($_GET['keyword'])."%' OR Per_Lname LIKE '%".trim($_GET['keyword'])."%' ";
}
	$result=$mysqli->query($sql);
$total=$result->num_rows;

$e_page=4; // กำหนด จำนวนรายการที่แสดงในแต่ละหน้า
$step_num=0;
if(!isset($_GET['page']) || (isset($_GET['page']) && $_GET['page']==1)){
    $_GET['page']=1;
    $step_num=0;
    $s_page = 0;
}else{
    $s_page = $_GET['page']-1;
    $step_num=$_GET['page']-1;
    $s_page = $s_page*$e_page;
}
$sql.=" ORDER BY St_Id ASC LIMIT ".$s_page.",$e_page";
$result=$mysqli->query($sql);
if($result && $result->num_rows>0){// คิวรี่ข้อมูลสำเร็จหรือไม่ และมีรายการข้อมูลหรือไม่
    while($row = $result->fetch_assoc()){ // วนลูปแสดงรายการ
        $num++;
		 $Pr_Id= $row['Pr_Id'];
        $Pr_Name= $row["Pr_Name"];
        $Pr_Details= $row["Pr_Details"];
        $Pr_WorkDay= $row["Pr_WorkDay"];
        $Pr_ReceiveDay= $row["Pr_ReceiveDay"];
        $Pr_Qrcode= $row["Pr_Qrcode"];
        $Per_Id= $row["Per_Id"];
		$Per_Fname = $row["Per_Fname"];
		$Per_Email = $row["Per_Email"];
		$Per_Lname = $row["Per_Lname"];
        $St_Id= $row["St_Id"];
?>
	<form action="./email.php" name="Frm1" id="Frm1" method="post">
        <input type="hidden" name="Per_Email[]" value="<?php echo $Per_Email;?>"/>
    <tr>
      <td class="text-center" ><?php echo $num;?></td>
		<td class="text-center" ><?php echo $Pr_Name;?></td>
		<td class="text-center" ><?php echo $Per_Fname." ".$Per_Lname ;?></td>
		<td class="text-center" ><button type="button" class="btn btn-danger" data-toggle="tooltip" title="<?php echo $Pr_Details;?>">View</button></td>
		<td class="text-center" ></td>
		<?php
		if($St_Id==4){
          echo "<td><font color=\"red\">รออนุมัติ</font></td>";
          echo  "<td>$Pr_WorkDay</td>";
          echo  "<td></td>";
          echo  "<td>";
          //    echo "<form action=\"/email.php method=\"post\" enctype=\"multipart/form-data\" name=\"frm\">";
          echo  "<div class=\"form-check form-check-inline \">";
          echo  "<label class=\"form-check-label\">";
          echo "<input class=\"form-check-input\"  type=\"checkbox\" id=\"Check\" onclick=\"myFunction('รหัส QRcode')\" name=\"check[]\" value=\"$Pr_Id\">อนุมัติ";
          echo  "<span class=\"form-check-sign\">";
          echo  "<span class=\"check\"></span>";
          echo  "</span>";
          echo  "</label></div>
          </div>";
			echo "<a href=\"\" class=\"delete\" ><i class=\"material-icons\">delete</i></a>";
          echo  "</td>";
			}else if($St_Id==5){
          echo "<td><font color=\"green\">อนุมัติ </font></td>";
        echo  "<td>$Pr_WorkDay</td>";
        echo  "<td></td>";
        echo  "<td>";
    //    echo "<form action=\"/email.php method=\"post\" enctype=\"multipart/form-data\" name=\"frm\">";
        //echo  "<div class=\"form-group\">";
        echo  "<div class=\"form-check form-check-inline disabled\">";
        echo  "<label class=\"form-check-label\">";
        echo "<input class=\"form-check-input\"  type=\"checkbox\" id=\"Check\" onclick=\"myFunction('รหัส QRcode')\" name=\"check[]\" value=\"$Pr_Id\" disabled> อนุมัติแล้ว";
        echo  " <span class=\"form-check-sign\">";

        echo  " <span class=\"check\"></span>";
        echo  "</span>";
        echo  "</label>";
        echo  " </div>";
        echo  "</div>";
        echo  "</td>";
      }
			?>
    </tr>
<?php
    }
}
?>
  </tbody>
</table>
	</div>
  <div align="center">
    <input type="submit" class="btn btn-info btn-round" name="submit" value="ยืนยัน">
    <input type="reset" class="btn btn-default btn-round" value="ยกเลิก">
  </div>
</form>
</div>
<?php
page_navi($total,(isset($_GET['page']))?$_GET['page']:1,$e_page,$_GET);
?>

<script type="text/javascript">
$(function(){
});
</script>
</body>
</html>
