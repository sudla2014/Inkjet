<?php include 'head.php'?>
<?php include 'menuadmin.php'?>
<?php include("./connectdb.php");?>
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
  <div class="card-header card-header-primary">
  </div>
  <div class="card-body">

    <div class="row">
      <div class="col-sm-4">
        <p class="h2">จัดการข้อมูลผู้ใช้งาน</p>
      </div>
      <div class="col-sm-8">
        <form class="form-inline" name="frmsearch" method="get" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
          <div class="form-group no-border">
            <input type="text" name="txtKeyword" id="txtKeyword" class="form-control" placeholder="Search" value="<?php echo $_GET["txtKeyword"];?>">
          </div>
          <button type="submit" class="btn btn-white btn-just-icon btn-round">
            <i class="material-icons">search</i>
          </button>
        </form>
        <a href="./register.php" class="btn btn-primary"><i class="material-icons">&#xE147;</i> <span>Add New User</span></a>

      </div>
    </div>
  </div>
  <?php
  $sql="SELECT owner.Ow_Id as Ps_Id,owner.Ow_Fname as Ps_Fname,owner.Ow_Lname as Ps_Lname,owner.Ow_Address as Ps_Address, owner.Ow_Phone as Ps_Phone,owner.Ow_Email as Ps_Email,owner.Ow_Line as Ps_Line,owner.St_Id as Ps_Status FROM owner
  UNION SELECT employee.Emp_Id as Ps_Id,employee.Emp_Fname as Ps_Fname,employee.Emp_Lname as Ps_Lname, employee.Emp_Address as Ps_Address,employee.Emp_Phone as Ps_Phone,employee.Emp_Email as Ps_Email,employee.Emp_Line as Ps_Line, employee.St_Id as Ps_Status FROM employee
  UNION SELECT customer.Cus_Id as Ps_Id,customer.Cus_Fname as Ps_Fname,customer.Cus_Lname as Ps_Lname, customer.Cus_Address as Ps_Address,customer.Cus_Phone as Ps_Phone, customer.Cus_Email as Ps_Email,customer.Cus_Line as Ps_Line,customer.St_Id as Ps_Status FROM customer";
  $results = $mysqli->query($sql) or die($mysqli->error.__LINE__);
  echo "มีจำนวน ".$results->num_rows." รายการ<br>";
  echo " <table class=\"table\">";
  ?>
  <thead>
    <tr>
      <th>ลำดับที่</th>
      <th>ชื่อ</th>
      <th>ที่อยู่</th>
      <th>เบอร์โทร</th>
      <th>อีเมล์</th>
      <th>ไลน์</th>
      <th>จัดการ</th>
    </tr>
  </thead>
  <?php
  $i=0;
  while($row = mysqli_fetch_array($results)) {
    ++$i;
    $Ps_Id= $row["Ps_Id"];
    $Ps_Fname= $row["Ps_Fname"];
    $Ps_Lname= $row["Ps_Lname"];
    $Ps_Address= $row["Ps_Address"];
    $Ps_Phone= $row["Ps_Phone"];
    $Ps_Email= $row["Ps_Email"];
    $Ps_Line= $row["Ps_Line"];
    ?>
  <tbody>
    <tr>
    <td><?php echo $i;?></td>
    <td><?php echo $Ps_Fname." ".$Ps_Lname ;?></td>
    <td><?php echo $Ps_Address;?></td>
    <td><?php echo $Ps_Phone;?></td>
    <td><?php echo $Ps_Email;?></td>
    <td><?php echo $Ps_Line;?></td>
        <td>
          <a href="#" class="settings" title="Settings" data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></a>
          <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>
        </td>
      </tr>
    </tbody>
  <?php }?>
  </table>
  <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
      <li class="page-item disabled">
        <a class="page-link" href="#" tabindex="-1">Previous</a>
      </li>
      <li class="page-item active"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#">Next</a>
      </li>
    </ul>
  </nav>
</div>
</body>
</html>
