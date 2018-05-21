<?php ?>
<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.7.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.7.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/icon-122x122.png" type="image/x-icon">
  <meta name="description" content="">
  <title>EZVAC - never tired of your rest!</title>
  <link rel="stylesheet" href="<?= base_url() ?>assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/tether/tether.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/dropdown/css/style.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/theme/css/style.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/mobirise/css/mbr-additional.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Mitr" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">

</head>



<style type="text/css">
body{
  font-family: 'Mitr', sans-serif;
}

</style>

<style scoped>

.button-success,
.button-error,
.button-warning,
.button-secondary {
  color: white;
  border-radius: 4px;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
}

.button-success {
  background: rgb(28, 184, 65); /* this is a green */
}

.button-error {
  background: rgb(202, 60, 60); /* this is a maroon */
}

.button-warning {
  background: rgb(223, 117, 20); /* this is an orange */
}

.button-secondary {
  background: rgb(66, 184, 221); /* this is a light blue */
}

</style>
<script type="text/javascript">

  function insert(){
    $("#insert").modal('show');
  }

</script>


<body>


  <div id="insert" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">เพิ่มข้อมูล</h4>
        </div>
        <div class="modal-body">
          <form role="form" action="<?=base_url('managment/hostel/insert')?>" method="post" enctype="multipart/form-data">
            <div class="row">
             <div class="col-lg-6">
              <div class="form-group">
                <label for="insertname" class="control-label">เลือกสถานที่:</label>
                <select class="form-control" id="place" name="place">
                  <?php  foreach ($place->result_array() as $row){ ?>
                  <option value="<?=$row['place_id']?>"><?=$row['place_name']?></option>
                  <?php } ?>
                </select>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <label for="insertname" class="control-label">ชื่อโรงแรม:</label>
                <input type="text" class="form-control" name="insertname" id="insertname" placeholder="ชื่อโรงแรม">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="insertphone" class="control-label">เบอร์โทร :</label>
                <input type="text" class="form-control" name="insertphone" id="insertphone" placeholder="เบอร์โทร">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="insertlevel" class="control-label">ระดับ (ดาว) :</label>
                <input type="text" class="form-control" name="insertlevel" id="insertlevel" placeholder="ระดับ (ดาว) ">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="insertprice" class="control-label">ราคาเริ่มต้น :</label>
                <input type="text" class="form-control" name="insertprice" id="insertprice" placeholder="ราคาเริ่มต้น ">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="insertaddress" class="control-label">ที่อยู่ :</label>
                <input type="text" class="form-control" name="insertaddress" id="insertaddress" placeholder="ที่อยู่  ">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="insertfacilities" class="control-label">สิ่งอำนวยความสะดวก :</label>
                <input type="text" class="form-control" name="insertfacilities" id="insertfacilities" placeholder="สิ่งอำนวยความสะดวก ">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="insertfacilities" class="control-label">อัพโหลดรูป (เลือกได้หลายไฟล์) :</label>
                <input type="file" name="filUpload[]" id="filUpload" multiple="multiple">
              </div>
            </div>



          </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
          <button type="submit" class="btn btn-primary">ยืนยัน</button>
        </div>
      </form>
    </div>
  </div>
</div>


<?php  foreach ($hostel->result_array() as $row){ ?>
<div id="edit<?=$row['hostel_id']?>" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">แก้ไขข้อมูล</h4>
      </div>
      <div class="modal-body">
        <form role="form" action="<?=base_url('managment/hostel/edit')?>"" method="post" enctype="multipart/form-data">
          <div class="row">
            <input type="text" name="editid" id="editid" value="<?=$row['hostel_id']?>" hidden>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="insertname" class="control-label">เลือกสถานที่:</label>
                <select class="form-control" id="place" name="place">
                  <option value="<?=$row['place_id']?>">เดิม : <?=$row['place_name']?></option>
                  <?php  foreach ($place->result_array() as $rowplace){ ?>
                  <option value="<?=$rowplace['place_id']?>"><?=$rowplace['place_name']?></option>
                  <?php } ?>
                </select>
              </div>
            </div>


            <div class="col-lg-6">
              <div class="form-group">
                <label for="insertname" class="control-label">ชื่อโรงแรม:</label>
                <input type="text" class="form-control" name="editname" id="editname" placeholder="ชื่อโรงแรม" value="<?=$row['hostel_name']?>">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="insertphone" class="control-label">เบอร์โทร :</label>
                <input type="text" class="form-control" name="editphone" id="editphone" placeholder="เบอร์โทร" value="<?=$row['hostel_phone']?>">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="insertlevel" class="control-label">ระดับ (ดาว) :</label>
                <input type="text" class="form-control" name="editlevel" id="editlevel" placeholder="ระดับ (ดาว) " value="<?=$row['hostel_level']?>">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="insertprice" class="control-label">ราคาเริ่มต้น :</label>
                <input type="text" class="form-control" name="editprice" id="editprice" placeholder="ราคาเริ่มต้น " value="<?=$row['hostel_price']?>">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="insertaddress" class="control-label">ที่อยู่ :</label>
                <input type="text" class="form-control" name="editaddress" id="editaddress" placeholder="ที่อยู่  " value="<?=$row['hostel_address']?>">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="insertfacilities" class="control-label">สิ่งอำนวยความสะดวก :</label>
                <input type="text" class="form-control" name="editfacilities" id="editfacilities" placeholder="สิ่งอำนวยความสะดวก " value="<?=$row['hostel_facilities']?>">
              </div>
            </div>



          </div>

     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
        <button type="submit" class="btn btn-primary">ยืนยัน</button>
      </div>
         </form>
    </div>
  </div>
</div>

<?php } ?>

<?php  foreach ($hostel->result_array() as $row){ ?>
<div id="condel<?=$row['hostel_id']?>" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="<?=base_url('managment/hostel/delete')?>" method="post">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">แจ้งเตือน</h4>
        </div>
        <div class="modal-body">
          <p>ท่านต้องการลบข้อมูล <?=$row['hostel_name']?> นี้ใช่หรือไม่ </p>
          <p><input type="text" name="delhostel" id="delhostel" value="<?=$row['hostel_id']?>" hidden></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">ไม่ใช่</button>
          <button type="submit" name="submitdel" class="btn btn-primary">ใช่</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php } ?>

<section class="menu cid-qPnsPjt4of" once="menu" id="menu1-1k">



  <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm" style="background-color: #333333">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <div class="hamburger">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
    </button>
    <div class="menu-logo">
      <div class="navbar-brand">
        <span class="navbar-logo">
          <a href="/">
           <img src="<?= base_url() ?>assets/images/icon-122x122.png" alt="Mobirise" title="" style="height: 3.8rem;">
         </a>
       </span>
       <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="/">
       EZVAC</a></span>
     </div>
   </div>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-success display-4" href="<?=base_url('managment/logout')?>"><span class="mbri-map-pin mbr-iconfont mbr-iconfont-btn"></span>
      LOGOUT</a></div>
  </div>
</nav>
</section>
<br>
<section class="features4 cid-qPn6AExY8A" id="features4-r">
  <div class="container-fluid">
    <h4>จัดการข้อมูล : โรงแรม</h4>
    <br>
    <button type="button" class="btn btn" style="background-color: #579a53;color: white;" onclick="insert()">เพิ่มข้อมูล</button>
    <a href="<?=base_url('managment/dashboard')?>"><button type="button" class="btn btn" style="background-color: #149dcc;color: white;">กลับหน้าจัดการ</button></a>
    <hr>
    <div class="row">
      <div class="col-lg-12">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>สถานที่</th>
              <th>ชื่อโรงแรม</th>
              <th>เบอร์โทร</th>
              <th>ระดับ (ดาว)</th>
              <th>ราคาเริ่มต้น</th>
              <th>ที่อยู่</th>
              <th>สิ่งอำนวยความสะดวก</th>
              <th>รูป</th>
              <th>แก้ไข</th>
              <th>ลบ</th>
            </tr>
          </thead>
          <tbody>
           <?php 
           foreach ($hostel->result_array() as $row){ ?>
           <tr>
            <td><?=$row['place_name']?></td>
            <td><?=$row['hostel_name']?></td>
            <td><?=$row['hostel_phone']?></td>
            <td><?=$row['hostel_level']?></td>
            <td><?=$row['hostel_price']?></td>
            <td><?=$row['hostel_address']?></td>
            <td><?=$row['hostel_facilities']?></td>
            <td><a href="<?=base_url('managment/hostel_photo/')?><?=$row['hostel_id']?>"><button class="button-warning pure-button">แก้ไขรูป</button></a></td>
            <td><button type="button" class="button-success pure-button" onclick='$("#edit<?=$row['hostel_id']?>").modal("show")'>แก้ไข</button></td>
            <td><button type="button" class="button-error pure-button" onclick='$("#condel<?=$row['hostel_id']?>").modal("show")'>ลบ</button></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>


</section>



<script src="<?= base_url() ?>assets/web/assets/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/popper/popper.min.js"></script>
<script src="<?= base_url() ?>assets/tether/tether.min.js"></script>
<script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/parallax/jarallax.min.js"></script>
<script src="<?= base_url() ?>assets/dropdown/js/script.min.js"></script>
<script src="<?= base_url() ?>assets/touchswipe/jquery.touch-swipe.min.js"></script>
<script src="<?= base_url() ?>assets/smoothscroll/smooth-scroll.js"></script>
<script src="<?= base_url() ?>assets/theme/js/script.js"></script>
<script src="<?= base_url() ?>assets/formoid/formoid.min.js"></script>


</body>
</html>