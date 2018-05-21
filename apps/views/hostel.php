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
        <a class="nav-link link text-white display-4" href="/"><span class="mbri-question mbr-iconfont mbr-iconfont-btn"></span>

        How it works</a>
      </li></ul>
      <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-success display-4" href="<?=base_url('/bookinglist')?>"><span class="mbri-map-pin mbr-iconfont mbr-iconfont-btn"></span>
      รายการจอง</a></div>
    </div>
  </nav>
</section>
<br>
<section class="features4 cid-qPn6AExY8A" id="features4-r">
  <div class="container">

    <ul class="list-unstyled">



      <?php
      foreach ($hostel->result_array() as $row){ ?>
      <hr>
      <li class="media" style="background-color: #fff;padding: 12px;">
        <?php

        $img = $this->db->query("
          SELECT * 
          FROM hostel_photo
          WHERE hostel_id = ".$row['hostel_id']."
          LIMIT 1");

          foreach ($img->result_array() as $i){ ?>
          <img class="mr-3" width="150" height="120"  src="<?= base_url() ?><?=$i['hostel_photo_src']?>" alt="Generic placeholder image">
          <?php } ?>
          <div class="media-body">
            <div class="row">
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
               <h5 class="mt-0 mb-1" style="float: left;"><a href="<?=base_url('room')?>/<?=$row['hostel_id']?>" style="text-decoration: underline;color: black;"><?=$row['hostel_name']?></a></h5>
             </div>
             <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
               <h5 class="mt-0 mb-1" style="float: right;color:#e01919 ">THB : <?=number_format($row['hostel_price'])?> / คืน</h5>
             </div>
             <div class="col-xl-6 col-lg-6 col-md-6 col-sm-5 col-xs-12">
               <p><h6><i class="fas fa-compass"></i> ตำแหน่ง : <?=$row['hostel_address']?></h6></p>
               <p><h6><i class="fas fa-star"></i> ระดับ : <?=$row['hostel_level']?> ดาว</h6></p>
             </div>
             <div class="col-xl-6 col-lg-6 col-md-6 col-sm-7 d-none d-sm-block">
               <p>
                <a class="btn btn" style="background-color: #579a53;color: white;float: right;" href="<?=base_url('room')?>/<?=$row['hostel_id']?>">ดูห้องพัก</a>
              </p>
            </div>
          </div>
        </div>
      </li>
      <br>
      <?php } ?>

    </ul>
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