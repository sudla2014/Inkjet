<?php session_start(); ?>
<body class="index-page sidebar-collapse">
  <nav class="navbar navbar-transparent  navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
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
            <li class="dropdown nav-item">
              <a href="" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <i class="material-icons">apps</i>เมนูการทำงาน
              </a>
              <div class="dropdown-menu dropdown-with-icons">
                <a href="./ui_orderall.php" class="dropdown-item">
                  จัดการรับงาน
                </a>
                <a href="./ui_qwork.php" class="dropdown-item">
                  จัดการคิวงาน
                </a>
              </div>
            </li><li class="dropdown nav-item">
              <a href="" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <i class="material-icons">apps</i>จัดการข้อมูลผู้ใช้งาน
              </a>
              <div class="dropdown-menu dropdown-with-icons">
              <a href="./ui_userman.php" class="dropdown-item">
                      จัดการข้อมูลลูกค้า
              </a>
              <a href="./ui_userman.php" class="dropdown-item">
                      จัดการข้อมูลพนักงาน
              </a>
            </div>
            </li>
              <li class="dropdown nav-item">
                <a href="" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <i class="material-icons">account_box</i>
                  <?php echo " ".$_SESSION['userFname'];?>
              </a>
              <div class="dropdown-menu dropdown-with-icons">
              <a href="" class="dropdown-item">
            <?php echo "ยินดีต้อนรับคุณ"."  ".$_SESSION['user'];?>
            </a>
              <a href="" class="dropdown-item">
                <i class="material-icons">settings_applications</i>
            Account Settings
          </a>
          <a class="dropdown-item" href="./logout.php" onclick="scrollToDownload()">
            <i class="material-icons">exit_to_app</i>
            ออกจากระบบ
          </a>
        </div>
        </li>
          </ul>
        </div>
      </div>
</nav>
