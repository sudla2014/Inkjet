<?php include"./head.php"?>
<body class="index-page sidebar-collapse">
  <nav class="navbar fixed-top navbar-expand-lg">
    <div class="container">
      <div class="navbar-translate">
        <ul class="navbar-nav ml-auto">
          <a class="navbar-brand" href="">
            CHAMP-INKJET</a>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.facebook.com/veegochamp" target="_blank" data-original-title="Like us on Facebook">
              <i class="fa fa-facebook-square"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
        <form action="./adduser.php" method="post">
        <div class="row">
          <div class="col">
            <input type="text" class="form-control" placeholder="username" name="user">
          </div>
          <div class="col">
            <input name="pass"
              data-toggle="password"
              data-placement="after"
              class="form-control"
              type="password"
              placeholder="password"
              data-eye-class="material-icons"
              data-eye-open-class="visibility"
              data-eye-close-class="visibility_off"
              data-eye-class-position-inside="true">
          </div>

        <button type="submit" class="btn btn-primary">Login</button>
      </form>
        </li>
            <a href="./register.php" class="btn btn-primary">สมัครสมาชิก</a>
         </ul>
           </div>
      </div>
  </nav>
  <div class="page-header header-filter clear-filter purple-filter" data-parallax="true" style="background-image: url('./assets/img/bg.jpg');">
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
    <div class="card-header card-header-warning">
    Register Now!
    </div>
    <div class="card-body">
    <form action="./adduser.php" method="post" name="frm">
    <input type="hidden" name="method" value="add"/>
    <input type="hidden" name="Per_Status" value="1"/>
        <div class="row">
          <div class="col-md-4 ml-auto mr-auto">
            <div class="form-group">
              <label for="exampleInputFirstname">First name</label>
              <input type="text" class="form-control" id="Fname" name="Fname" aria-describedby="textHelp" placeholder="Enter First name" required>
            </div>
            <div class="form-group">
              <label for="exampleInputLastname">Last name</label>
              <input type="text" class="form-control" id="Lname" name="Lname" aria-describedby="textHelp" placeholder="Enter Last name" required>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Address</label>
              <textarea class="form-control" id="Address" name="Address" rows="3" required></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputLine">Phone</label>
              <input type="text" class="form-control" id="Phone" OnKeyPress="return chkNumber(this)" name="Phone" aria-describedby="textHelp" maxlength="10" placeholder="Enter Phone Number" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" class="form-control" id="Email" name="Email" aria-describedby="emailHelp" placeholder="Enter email" required>
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputLine">Line ID</label>
              <input type="text" class="form-control" id="Line" name="Line" aria-describedby="textHelp" placeholder="Enter Line ID" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">User name</label>
              <input type="text" class="form-control" id="User" name="User" aria-describedby="textHelp" placeholder="Enter Username" required>
            </div>
            <div class="form-group">
              <label  for="pass1">Password</label>
              <input type="password" class="form-control" name="pass1" id="password" placeholder="Enter Password" data-toggle="password"
                data-placement="after"
                data-eye-class="material-icons"
                data-eye-open-class="visibility"
                data-eye-close-class="visibility_off"
                data-eye-class-position-inside="true" minlength="8" maxlength="12" required>
            </div>
            <div class="form-group">
              <label for="pass2">Confirm Password</label>
            <input type="password" class="form-control" name="pass2" id="confirm_password" placeholder="Enter Password"   data-toggle="password"
              data-placement="after"
              data-eye-class="material-icons"
              data-eye-open-class="visibility"
              data-eye-close-class="visibility_off"
              data-eye-class-position-inside="true" minlength="8" maxlength="12" required>
            <span id="confirmMessage" class="confirmMessage"></span>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
          </div>
        </div>
      </form>
    </div>
  </div>
      <script>
      var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
function chkNumber(ele)
{
var vchar = String.fromCharCode(event.keyCode);
if ((vchar<'0' || vchar>'9') && (vchar != '.')) return false;
ele.onKeyPress=vchar;
}
</script>
	       <script src="js/bootstrap-show-password.js"></script>
  <script>
    $('[data-attr="show-password"]').password({
      placement: 'before',
      eyeClass: 'material-icons',
      eyeOpenClass: 'visibility',
      eyeCloseClass: 'visibility_off',
      eyeClassPositionInside: true
    })
  </script>
</body>
</html>
