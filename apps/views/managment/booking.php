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
    <h4>จัดการข้อมูล : สมาชิก</h4>
    <br>
    <a href="<?=base_url('managment/dashboard')?>"><button type="button" class="btn btn" style="background-color: #149dcc;color: white;">กลับหน้าจัดการ</button></a>
    <hr>
    <div class="row">
      <div class="col-lg-12">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Username</th>
              <th>ชื่อผู้จอง</th>
              <th>ประเภทห้อง</th>
              <th>เบอร์โทรศัพท์</th>
              <th>อีเมลล์</th>
              <th>วันเช็คอิน</th>
              <th>วันเช็คเอาท์</th>
              <th>ราคารวม</th>
              <th>กี่คืน</th>
              <th>รหัสอ้างอิง</th>
            </tr>
          </thead>
          <tbody>
           <?php 
            function DateDiff($strDate1,$strDate2)
                 {
                 return (strtotime($strDate2) - strtotime($strDate1))/  ( 60 * 60 * 24 );  // 1 day = 60*60*24
                 }
           foreach ($booking->result_array() as $row){ ?>
           <tr>
            <td><?=$row['user_fullname']?></td>
            <td><?=$row['room_type_name']?></td>
            <td><?=$row['booking_name']?></td>
            <td><?=$row['booking_phone']?></td>
            <td><?=$row['booking_email']?></td>
            <td><?=$row['booking_checkin']?></td>
            <td><?=$row['booking_checkout']?></td>
<td><?=DateDiff($row['booking_checkin'],$row['booking_checkout']) * $row['room_price']?></td>
            <td><?=DateDiff($row['booking_checkin'],$row['booking_checkout'])?></td>
            
            <td><?=$row['reservation_id']?></td>

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