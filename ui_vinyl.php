<?php include"./head.php"?>
<?php include"./menucus.php"?>
<!-- ตัวอักษรตรงกลาง head -->
<div class="page-header header-filter clear-filter purple-filter" data-parallax="true" style="background-image: url('./assets/img/bg.jpg');">
  <div class="container">
    <div class="row">
      <div class="col-md-8 ml-auto mr-auto">
        <div class="brand">
          <h1>ป้ายไวนิล</h1>
          <!--<h3>งานผลิต ไวนิล สติ๊กเกอร์ใส สติ๊กเกอร์ขาวเงา สติ๊กเกอร์ขาวด้าน สติ๊กเกอร์ผ้า ซีทรู งานโรงพิมพ์ นามบัตร งานหนังสือ/วารสาร/งานเข้าเล่ม/งานถ่ายเอกสาร งานติดตั้ง งานรื้อถอน วัดหน้างาน ฟิวเจอร์บอร์ด โฟมบอร์ด บริการขนส่ง งานด่วน งานส่งต่อ(งานโรงพิมพ์ ร้านสกรีนเสื้อ)</h3>-->
        </div>
      </div>
    </div>
  </div>
</div>
<!--จบตัวอักษรตรงกลาง-->
<div class="card card-nav-tabs text-center">
  <div class="card-header card-header-info" name="Pr_Name">
    ป้ายไวนิล
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-md-4 mx-auto">
        <form action="./frm_vinyl.php" method="post" enctype="multipart/form-data" name="frm">
          <input type="hidden" name="method" value="add"/>
          <input type="hidden" name="Pr_Name" value="ป้ายไวนิล"/>
          <div class="form-group">
            <label for="exampleFormControlSelect2">ประเภทวัสดุ</label>
            <select class="form-control" name="Material_Name" id="exampleFormControlSelect1">
              <option value="ไวนิล outdoor">ไวนิล outdoor</option>
              <option value="ไวนิล indoor">ไวนิล indoor</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect2">ลักษณะ</label>
            <select class="form-control" name="Style_Name" id="exampleFormControlSelect1">
              <option value="พับขอบและเจาะตาไก่">พับขอบและเจาะตาไก่</option>
              <option value="ไม่พับขอบและเจาะตาไก่">ไม่พับขอบและเจาะตาไก่</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect2">รูปแบบ</label>
            <select class="form-control" name="Format_Name" id="exampleFormControlSelect1">
              <option value="1-30 ตร.ม.">1-30 ตร.ม.</option>
              <option value="30 ตร.ม.ขึ้นไป">30 ตร.ม.ขึ้นไป</option>
              <option value="1-10 ตร.ม">1-10 ตร.ม.</option>
              <option value="10 ตร.ม.ขึ้นไป">10 ตร.ม.ขึ้นไป</option>
              <option value="ไม่กำนดรูปแบบ">ไม่กำหนดรูปแบบ</option>
            </select>
          </div>
          <div class="form-group">
            <div class="options custom_format">
              <a href="#" class="bt" data-label="รูปแบบ (ปรับแต่ง)" data-unit="ซม.">กำหนดขนาดเอง</a>
              <p class="clearfix">
                <label><input type="number" name="custom_format_width" placeholder="กว้าง" data-minw="30" data-maxw="170" /><em>ซม.</em></label>
                <span>x</span>
                <label><input type="number" name="custom_format_height" placeholder="สูง"  data-minh="30" data-maxh="1000" /><em>ซม.</em></label>
                <a href="#" class="add_format"><i class="fa fa-check"></i></a>      </p>
                <p class="minmax clearfix">
                  <label><small>ระหว่าง 30ซม. และ 170ซม. </small></label>
                  <span> </span>
                  <label><small>ระหว่าง 30ซม. และ 1000ซม.</small></label>     </p>
                </div>
              </div>
              <div class="form-group"  data-part="pages" data-code="pages_01" data-name="พิมพ์ 1 ด้าน">
                <h3>Print One Side</h3>
                <div class="options">
                  <div class="colors data_option clearfix selected" data-part="colors" data-code="colors_40" data-name="สี่สีหน้าเดียว">
                    <a href="#" class="radio"><i class="fa fa-check"></i></a>
                    <img src="/media/option_img/colors_40.png" alt="" />
                    <div class="desc">
                      <h4>สี่สีหน้าเดียว </h4>
                      <select class="form-control" name="Color_Name"id="exampleFormControlSelect1">
                        <option value="พิมพ์สี CMYK ด้านเดียว">พิมพ์สี CMYK ด้านเดียว </option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card text-center" style="width: 35rem;">
                <div class="card-body">
                  <h4 class="card-title">จำนวนสินค้าที่ต้องการ</h4>
                  <div class="form-check form-check-radio form-check-inline">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1"> 1
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                  <div class="form-check form-check-radio form-check-inline">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2"> 2
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                  <div class="form-check form-check-radio form-check-inline">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="3"> 3
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                  <div class="form-check form-check-radio form-check-inline">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="4"> 4
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                  <div class="form-check form-check-radio form-check-inline">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="5"> 5
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                  <div class="form-check form-check-radio form-check-inline">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="10"> 10
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                  <div class="form-check form-check-radio form-check-inline">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="25"> 25
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                  <div class="form-check form-check-radio form-check-inline">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="50"> 50
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                  <div class="form-check form-check-radio form-check-inline">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="100"> 100
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">ระบุจำนวนที่ต้องการ</label>
                    <input type="text" class="form-control" name="specifyNumber" id="exampleInputEmail1" aria-describedby="textHelp">
                  </div>
                </div>
              </div>
              <div class="card text-center" style="width:35rem;">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-8 mx-auto">
                      <h4 class="card-title">ตรวจสอบ Artwork</h4>
                      <h6 class="card-subtitle mb-2 text-muted">นำ Artwork มาเอง</h6>
                      <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                        <div>
                          <span class="btn btn-raised btn-round btn-default btn-file card text-center col-md-8 ml-auto mr-auto">
                            <span class="fileinput-new">Select image</span>
                            <span class="fileinput-exists">Change</span>
                            <input type="file" name="Uploadimg" />
                          </span>
                          <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                        </div>
                      </div><br>
                      <h6 class="card-subtitle mb-2 text-muted">ให่ออกแบบ Artwork</h6>
                      <p class="card-text">รายละเอียดงาน</p>
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1"></label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="Detail_Work" rows="3"></textarea>
                      </div>
                      <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                        <div>
                          <span class="btn btn-raised btn-round btn-default btn-file card text-center col-md-8 ml-auto mr-auto">
                            <span class="fileinput-new">Select image</span>
                            <span class="fileinput-exists">Change</span>
                            <input type="file" name="Uploadimg" />
                          </span>
                          <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary">ยืนยัน</button>
                      <button type="button" class="btn btn-primary">ยกเลิก</button>
                    </div>
                  </div>
                </div>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
