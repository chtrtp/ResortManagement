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
          <form role="form" action="<?=base_url('managment/room/insert')?>" method="post" enctype="multipart/form-data">
            <div class="row">
             <div class="col-lg-6">
              <div class="form-group">
                <label for="inserttype" class="control-label">โรงแรม :</label>
                <select class="form-control" name="hostel">
                  <?php  foreach ($hostel->result_array() as $row){ ?>
                  <option value="<?=$row['hostel_id']?>"><?=$row['hostel_name']?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="inserttype" class="control-label">ประเภทห้อง:</label>
                <input type="text" class="form-control" name="inserttype" id="inserttype" placeholder="ประเภทห้อง">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="insertprice" class="control-label">ราคา :</label>
                <input type="text" class="form-control" name="insertprice" id="insertprice" placeholder="ราคา">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="insertmaxuser" class="control-label">จำนวนผู้เข้าพักสูงสุด :</label>
                <input type="text" class="form-control" name="insertmaxuser" id="insertmaxuser" placeholder="จำนวนผู้เข้าพักสูงสุด ">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="insertbed" class="control-label">จำนวนเตียง :</label>
                <input type="text" class="form-control" name="insertbed" id="insertbed" placeholder="จำนวนเตียง ">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="insertaccessories" class="control-label">อุปกรณ์ :</label>
                <input type="text" class="form-control" name="insertaccessories" id="insertaccessories" placeholder="อุปกรณ์">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="inserttoilet" class="control-label">ห้องน้ำ :</label>
                <input type="text" class="form-control" name="inserttoilet" id="inserttoilet" placeholder="ห้องน้ำ ">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="insertother" class="control-label">อื่นๆ :</label>
                <input type="text" class="form-control" name="insertother" id="insertother" placeholder="สิ่งอำนวยความสะดวก ">
              </div>
            </div>
            <div class="col-lg-6">
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


<?php  foreach ($room->result_array() as $row){ ?>
<div id="edit<?=$row['room_id']?>" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">แก้ไขข้อมูล</h4>
      </div>
      <div class="modal-body">
        <form role="form" action="<?=base_url('managment/room/edit')?>" method="post" enctype="multipart/form-data">
          <div class="row">
           <div class="col-lg-6">
            <input type="text" name="editid" id="editid" value="<?=$row['room_id']?>" hidden>
            <div class="form-group">
              <label for="inserttype" class="control-label">โรงแรม :</label>
              <select class="form-control" name="hostel">
                <option value="<?=$row['hostel_id']?>">เดิม : <?=$row['hostel_name']?></option>
                <?php  foreach ($hostel->result_array() as $rowh){ ?>
                <option value="<?=$rowh['hostel_id']?>"><?=$rowh['hostel_name']?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label for="edittype" class="control-label">ประเภทห้อง:</label>
              <input type="text" class="form-control" name="edittype" id="edittype" placeholder="ประเภทห้อง" value="<?=$row['room_type_name']?>">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label for="editprice" class="control-label">ราคา :</label>
              <input type="text" class="form-control" name="editprice" id="editprice" placeholder="ราคา" value="<?=$row['room_price']?>">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label for="editmaxuser" class="control-label">จำนวนผู้เข้าพักสูงสุด :</label>
              <input type="text" class="form-control" name="editmaxuser" id="editmaxuser" placeholder="จำนวนผู้เข้าพักสูงสุด " value="<?=$row['maximum_User']?>">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label for="editbed" class="control-label">จำนวนเตียง :</label>
              <input type="text" class="form-control" name="editbed" id="editbed" placeholder="จำนวนเตียง " value="<?=$row['room_bed']?>">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label for="editaccessories" class="control-label">อุปกรณ์ :</label>
              <input type="text" class="form-control" name="editaccessories" id="editaccessories" placeholder="อุปกรณ์" value="<?=$row['room_accessories']?>">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label for="edittoilet" class="control-label">ห้องน้ำ :</label>
              <input type="text" class="form-control" name="edittoilet" id="edittoilet" placeholder="ห้องน้ำ " value="<?=$row['room_toilet']?>">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label for="editother" class="control-label">อื่นๆ :</label>
              <input type="text" class="form-control" name="editother" id="editother" placeholder="สิ่งอำนวยความสะดวก " value="<?=$row['room_other']?>">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label for="topic" class="control-label">อัพโหลดรูป : (รูปเดิมไม่ต้องอัพ)</label>
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

<?php  foreach ($room->result_array() as $row){ ?>
<div id="condel<?=$row['room_id']?>" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="<?=base_url('managment/room/delete')?>" method="post">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">แจ้งเตือน</h4>
        </div>
        <div class="modal-body">
          <p>ท่านต้องการลบข้อมูล <?=$row['room_type_name']?> นี้ใช่หรือไม่ </p>
          <p><input type="text" name="delroom" id="delroom" value="<?=$row['room_id']?>" hidden></p>
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
    <h4>จัดการข้อมูล : ห้องพัก</h4>
    <br>
    <button type="button" class="btn btn" style="background-color: #579a53;color: white;" onclick="insert()">เพิ่มข้อมูล</button>
    <a href="<?=base_url('managment/dashboard')?>"><button type="button" class="btn btn" style="background-color: #149dcc;color: white;">กลับหน้าจัดการ</button></a>
    <hr>
    <div class="row">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>ประเภทห้อง</th>
            <th>ราคา</th>
            <th>จำนวนผู้เข้าพักสูงสุด</th>
            <th>เตียง</th>
            <th>อุปกรณ์</th>
            <th>ห้องน้ำ</th>
            <th>อื่นๆ</th>
            <th>แก้ไข</th>
            <th>ลบ</th>
          </tr>
        </thead>
        <tbody>
         <?php 
         foreach ($room->result_array() as $row){ ?>
         <tr>
          <td><?=$row['room_type_name']?></td>
          <td><?=$row['room_price']?></td>
          <td><?=$row['maximum_User']?></td>
          <td><?=$row['room_bed']?></td>
          <td><?=$row['room_accessories']?></td>
          <td><?=$row['room_toilet']?></td>
          <td><?=$row['room_other']?></td>
          
          <td><button type="button" class="button-success pure-button" onclick='$("#edit<?=$row['room_id']?>").modal("show")'>แก้ไข</button></td>
          <td><button type="button" class="button-error pure-button" onclick='$("#condel<?=$row['room_id']?>").modal("show")'>ลบ</button></td>
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