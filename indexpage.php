<?php include"./head.php"?>
<body class="index-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <ul class="navbar-nav ml-auto">
          <a class="navbar-brand" href="">CHAMP-INKJET</a>
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
            <form action="./check.php" method="post" enctype="multipart/form-data" name="frm">
              <input type="hidden" name="method" value="add"/>
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
                <button type="submit" onclick="JSalert()" class="btn btn-primary btn-5">Login</button>
              </form>
            </li>
            <a href="./register.php" class="btn btn-primary  btn-5">สมัครสมาชิก</a>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</nav>
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
<div class="main main-raised">
  <div class="section section-basic">
    <div class="container">
    </div>
  </div>
  <!--         carousel  -->
  <div class="section" id="carousel">
    <div class="container">
      <div class="row">
        <div class="col-md-10 mr-auto ml-auto">
          <!-- Carousel Card -->
          <div class="card card-raised card-carousel">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="./assets/img/bg2.jpg" alt="First slide">
                  <div class="carousel-caption d-none d-md-block">
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="./assets/img/bg3.jpg" alt="Second slide">
                  <div class="carousel-caption d-none d-md-block">
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="./assets/img/bg.jpg" alt="Third slide">
                  <div class="carousel-caption d-none d-md-block">
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="./assets/img/bg.jpg" alt="Third slide">
                  <div class="carousel-caption d-none d-md-block">

                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="./assets/img/bg.jpg" alt="Third slide">
                  <div class="carousel-caption d-none d-md-block">

                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <i class="material-icons">keyboard_arrow_left</i>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <i class="material-icons">keyboard_arrow_right</i>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <!-- End Carousel Card -->
        </div>
      </div>
    </div>
  </div>
  <!--         end carousel -->
<?php include"./foot.php"?>
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
