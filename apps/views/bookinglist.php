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
  
  
  
</head>
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
            <a href="welcome.html">
             <img src="<?= base_url() ?>assets/images/icon-122x122.png" alt="Mobirise" title="" style="height: 3.8rem;">
           </a>
         </span>
         <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="<?=base_url('/')?>">
         EZVAC</a></span>
       </div>
     </div>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
        <a class="nav-link link text-white display-4" href="/managment/dashboard">
          <span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>
          Services
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link link text-white display-4" href="admin"><span class="mbri-question mbr-iconfont mbr-iconfont-btn"></span>

        How it works</a>
      </li></ul>
      <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-success display-4" href="<?=base_url('/bookinglist')?>"><span class="mbri-map-pin mbr-iconfont mbr-iconfont-btn"></span>
      รายการจอง</a></div>
    </div>
  </nav>
</section>
<br>

<section class="mbr-section form1 cid-qPn5aOs6vb" id="form1-p">
  <div class="container">
    <div class="row">
      <div class="col-lg-12" style="text-align: center;">
       <?php
       if(isset($_SESSION['sign_in']) && $_SESSION['sign_in'] == "loged"){ ?>

       <?php 
       foreach ($user->result_array() as $rowu){ ?>

       <h2>ผู้ใช้ : <?=$rowu['user_fullname']?></h2>

       <br>
       <section class="features4 cid-qPn6AExY8A" id="features4-r">
        <div class="container">
          <h5>แจ้ง : นำหมายเลขอ้างอิงไปเช็คอินที่โรงแรมที่ท่านจอง</h5>
          <hr>
          <div class="row">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>ประเภทห้อง</th>
                  <th>ผู้จอง</th>
                  <th>เบอร์โทรศัพท์</th>
                  <th>อีเมลล์</th>
                  <th>วันเช็คอิน</th>
                  <th>วันเช็คเอาท์</th>
                  <th>กี่คืน</th>
                  <th>ราคารวม</th>
                  <th>หมายเลขอ้างอิง</th>
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
                <td><?=$row['room_type_name']?></td>
                <td><?=$row['booking_name']?></td>
                <td><?=$row['booking_phone']?></td>
                <td><?=$row['booking_email']?></td>
                <td><?=$row['booking_checkin']?></td>
                <td><?=$row['booking_checkout']?></td>
                
                <td><?=DateDiff($row['booking_checkin'],$row['booking_checkout'])?></td>
                <td><?=DateDiff($row['booking_checkin'],$row['booking_checkout']) * $row['room_price']?></td>
                <td><?=$row['reservation_id']?></td>


              </tr>
              <?php } ?>
            </tbody>
          </table>

        </div>


      </section>


      <?php } ?>

      <?php }else{ ?>

      <h1>Log In is required</h1>


      <?php } ?>
    </div>
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