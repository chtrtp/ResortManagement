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


</head>



<style type="text/css">
body{
  font-family: 'Mitr', sans-serif;
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
          <form role="form" action="<?=base_url('managment/place/insert')?>" method="post" enctype="multipart/form-data">
            <div class="row">
             <div class="col-lg-12">
              <div class="form-group">
                <label for="insertname" class="control-label">ชื่อสถานที่:</label>
                <input type="text" class="form-control" name="insertname" id="insertname" placeholder="ชื่อสถานที่">
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <label for="topic" class="control-label">อัพโหลดรูป :</label>
                <input type="file" name="filUpload" id="filUpload">
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


<?php  foreach ($place->result_array() as $row){ ?>
<div id="edit<?=$row['place_id']?>" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">แก้ไขข้อมูล</h4>
      </div>
      <div class="modal-body">
        <form role="form" action="<?=base_url('managment/place/edit')?>" method="post" enctype="multipart/form-data">
          <div class="row">
           <div class="col-lg-12">
            <div class="form-group">
              <input type="text" name="editid" id="editid" value="<?=$row['place_id']?>" hidden>
              <label for="editname" class="control-label">ชื่อสถานที่:</label>
              <input type="text" class="form-control" name="editname" id="editname" placeholder="ชื่อสถานที่" value="<?=$row['place_name']?>">
            </div>
          </div>
          <div class="col-lg-12">
            <div class="form-group">
              <label for="topic" class="control-label">อัพโหลดรูป : ( ใช้รูปเดิมไม่ต้องใส่ )</label>
              <input type="file" name="filUpload" id="filUpload">
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

<?php  foreach ($place->result_array() as $row){ ?>
<div id="condel<?=$row['place_id']?>" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="<?=base_url('managment/place/delete')?>" method="post">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">แจ้งเตือน</h4>
        </div>
        <div class="modal-body">
          <p>ท่านต้องการลบข้อมูล <?=$row['place_name']?> นี้ใช่หรือไม่ </p>
          <p><input type="text" name="delplace" id="delplace" value="<?=$row['place_id']?>" hidden></p>
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
          <a href="welcome.html#header2-f">
           <img src="<?= base_url() ?>assets/images/icon-122x122.png" alt="Mobirise" title="" style="height: 3.8rem;">
         </a>
       </span>
       <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="welcome#header2-f">
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
  <div class="container">
    <h4>จัดการข้อมูล : สถานที่</h4>
    <br>
    <button type="button" class="btn btn" style="background-color: #579a53;color: white;" onclick="insert()">เพิ่มข้อมูล</button>
    <a href="<?=base_url('managment/dashboard')?>"><button type="button" class="btn btn" style="background-color: #149dcc;color: white;">กลับหน้าจัดการ</button></a>
    <hr>
    <div class="row">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>รูปภาพ</th>
            <th>ชื่อสถานที่</th>
            <th>แก้ไข</th>
            <th>ลบ</th>
          </tr>
        </thead>
        <tbody>
         <?php 
         foreach ($place->result_array() as $row){ ?>
         <tr>
          <td><img width="150" height="150" src="<?= base_url() ?><?=$row['place_img']?>"></td>
          <td><?=$row['place_name']?></td>
          <td><button type="button" class="btn btn" style="background-color: #e8ae13;color: white;" onclick='$("#edit<?=$row['place_id']?>").modal("show")'>แก้ไข</button></td>
          <td><button type="button" class="btn btn" style="background-color: #e84213;color: white;" onclick='$("#condel<?=$row['place_id']?>").modal("show")'>ลบ</button></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>

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