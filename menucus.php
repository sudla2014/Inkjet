<?php session_start(); ?>
<body class="index-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
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
          <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
            <i class="material-icons">apps</i> สินค้าทางร้าน
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="./ui_vinyl.php" class="dropdown-item">
                ไวนิล
              </a>
              <a href="#" class="dropdown-item">
                 สติกเกอร์
              </a>
              <a href="#" class="dropdown-item">
                 ไดคัท
              </a>
              <a href="#" class="dropdown-item">
                 ซีทรู
              </a>
              <a href="#" class="dropdown-item">
                  ฟิวเจอร์บอร์ด
              </a>
            </div>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="./ui_order.php" onclick="scrollToDownload()">
          <i class="material-icons">content_paste</i> ดูประวัติการสั่งงาน
            </a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="./ui_artwork.php" onclick="scrollToDownload()">
            <i class="material-icons">photo</i> ดูการออกแบบงาน
            </a>
          </li>
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">account_box</i>
              <?php echo " ".$_SESSION['userFname'];?>
          </a>
          <div class="dropdown-menu dropdown-with-icons">
          <a href="#" class="dropdown-item">
        <?php echo "ยินดีต้อนรับคุณ"."  ".$_SESSION['user'];?>
        </a>
          <a href="#" class="dropdown-item">
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
