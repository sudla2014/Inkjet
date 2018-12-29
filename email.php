
<?php  require($_SERVER['DOCUMENT_ROOT']."/ProJect-inkjet/Inkjet-END/lib/phpmailer/PHPMailerAutoload.php");?>
<?php
include("./connectdb.php");
session_start();
$Per_Id=$_SESSION['Userid'];
$Per_name=$_SESSION['user'];
if(isset($_POST['check'])){
  $id =$_POST['check'];
}

$EmailPer ;
if(isset($_POST['Per_Email'])){
  $EmailPer = $_POST['Per_Email'];
}
if(isset($_POST['submit']))
{
  $emai = implode ("", $EmailPer);
  $imp = implode(", ",$id);


  $sqls="UPDATE product SET product.St_Id=5 WHERE product.Pr_Id IN ($imp)";
  $mysqli->query($sqls);
}
?>
<?php
header('Content-Type: text/html; charset=utf-8');

//START OLD CODE EMAIL
$mail = new PHPMailer;
$mail->CharSet = "utf-8";
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;


$gmail_username = "58410036@go.buu.ac.th"; // gmail ที่ใช้ส่ง
$gmail_password = "01022540"; // รหัสผ่าน gmail
// ตั้งค่าอนุญาตการใช้งานได้ที่นี่ https://myaccount.google.com/lesssecureapps?pli=1
  $sender = "$Per_name"; // ชื่อผู้ส่ง
  $email_sender = "58410036@go.buu.ac.th"; // เมล์ผู้ส่ง
  /*$email_receiver= "sudla2014@hotmail.com";
  echo $email_receiver;
  $email_reciever =  array("$emai");
*/
//$email_reciever =  array("$emai");
$countarray = count($EmailPer);



  /*$emailPerson = array("$emai");
  $NumberMai = count($emailPerson);
  echo $NumberMai." "."<br>";


  for ($x = 0; $x < $NumberMai; $x++)
  {
    $email_receiver = $emailPerson[$x]; //sudla2014@hotmail.com,sudla2014@hotmail.com
    */
    // เมล์ผู้รับ ***  ตรงนี้ต้องเอา array สงไปทีละช่อง เช่น $emai[$i]

    for($i = 0 ;$i<$countarray;$i++)
    {
      echo "".  $EmailPer[$i]."<br>";
        $email_receiver =  $EmailPer[$i];
  $subject = "แจ้งสถานะงาน"; // หัวข้อเมล์
  // code...

  $mail->Username = $gmail_username;
  $mail->Password = $gmail_password;
  $mail->setFrom($email_sender, $sender);
  $mail->addAddress($EmailPer[$i]);
  $mail->Subject = $subject;

  $email_content = "
  <!DOCTYPE html>
  <html>
  <head>
  <meta charset=utf-8'/>
  <title>แจ้งสถานะงาน</title>
  </head>
  <body>
  		<div class=\"row\">
  <div class=\"col-md-6\">
    <div class=\"card\">
      <div class=\"card-header\">
        <h4 class=\"card-title\">>แจ้งสถานะงาน</</h4>
      </div>
      <div class=\"card-body\">
        The place is close to Barceloneta Beach and bus stop just 2 min by walk and near  where you can enjoy the main night life in Barcelona...
      </div>
    </div>
  </div>
    </body>
  </html>
  ";

  //  ถ้ามี email ผู้รับ
  if($email_receiver){
    $mail->msgHTML($email_content);


    if (!$mail->send()) {  // สั่งให้ส่ง email

      // กรณีส่ง email ไม่สำเร็จ
      echo "<h3 class='text-center'>ระบบมีปัญหา กรุณาลองใหม่อีกครั้ง</h3>";
      echo $mail->ErrorInfo; // ข้อความ รายละเอียดการ error
    }else{
      // กรณีส่ง email สำเร็จ
      echo "ระบบได้ส่งข้อความไปเรียบร้อย";
    }
  }
//  END OLD CODE EMAIL
}// END LOOP FOR EMAIL RECIEVE
header("Refresh:0; url=ui_orderall.php");
?>
