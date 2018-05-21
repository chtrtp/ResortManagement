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
  
</head>

<style type="text/css">
body{
  font-family: 'Mitr', sans-serif;
}

</style>



<body>
  <section class="menu cid-qPnsPjt4of" once="menu" id="menu1-1k">



    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color transparent">
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
         <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="<?=base_url('/')?>">
         EZVAC</a></span>
       </div>
     </div>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
        <a class="nav-link link text-white display-4" href="/requestform">
          <span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>
          Request Form
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link link text-white display-4" href="/managment/login"><span class="mbri-question mbr-iconfont mbr-iconfont-btn"></span>

        Admin</a>
      </li></ul>
      <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-success display-4" href="<?=base_url('/bookinglist')?>"><span class="mbri-map-pin mbr-iconfont mbr-iconfont-btn"></span>
      รายการจอง</a></div>
    </div>
  </nav>
</section>

<section class="engine"><a href="https://mobirise.ws/f">simple site builder</a></section><section class="cid-qPmWOkciTn mbr-fullscreen mbr-parallax-background" id="header2-f">





  <div class="container align-center">
    <div class="row justify-content-md-center">
      <div class="mbr-white col-md-10">
        <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">EZVAC</h1>
        <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-2">
        Never tired of your rest</h3>

        <div class="mbr-section-btn"><a class="btn btn-md btn-white display-4" href="<?=base_url('/bookinglist')?>">BOOKING</a>
          <?php if (!isset($_SESSION['sign_in'])) { ?>
          <a class="btn btn-md btn-white-outline display-4" href="<?=base_url('login')?>">LOG IN<br></a>
          <?php } ?>
          <?php if (isset($_SESSION['sign_in'])) { ?>
          <a class="btn btn-md btn-white-outline display-4" href="<?=base_url('/logout')?>">LOGOUT<br></a>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>

</section>

<section class="features1 cid-qPn3mdAeh2 mbr-parallax-background" id="features1-n">



  <div class="mbr-overlay" style="opacity: 0.9; background-color: rgb(239, 239, 239);">
  </div>
  <div class="container">
    <div class="media-container-row">

      <div class="card p-3 col-12 col-md-6 col-lg-4">
        <div class="card-img pb-3">
          <span class="mbr-iconfont mbri-pin"></span>
        </div>
        <div class="card-box">
          <h4 class="card-title py-3 mbr-fonts-style display-5">Places of your choice</h4>
          <p class="mbr-text mbr-fonts-style display-7"><br>Plenty of accommodation awaits!!</p>
        </div>
      </div>

      <div class="card p-3 col-12 col-md-6 col-lg-4">
        <div class="card-img pb-3">
          <span class="mbri-touch mbr-iconfont"></span>
        </div>
        <div class="card-box">
          <h4 class="card-title py-3 mbr-fonts-style display-5">Your phone matters</h4>
          <p class="mbr-text mbr-fonts-style display-7">
            Everyone desire a beautiful vacation, will it be better if you just lay on a bed in a very comfort room you have chose.<br>
          </p>
        </div>
      </div>

      <div class="card p-3 col-12 col-md-6 col-lg-4">
        <div class="card-img pb-3">
          <span class="mbri-responsive mbr-iconfont"></span>
        </div>
        <div class="card-box">
          <h4 class="card-title py-3 mbr-fonts-style display-5">Multi-Platform</h4>
          <p class="mbr-text mbr-fonts-style display-7">
            Accessible from both your phone and PC, no matter you're user or admin, considering mobile application very soon.<br>
          </p>
        </div>
      </div>



    </div>

  </div>

</section>



<section class="features4 cid-qPn6AExY8A" id="features4-r">




  <div class="container">
   <div class="row">

    <?php
    foreach ($place->result_array() as $row){ ?>
    <div class="col-xl-4">
     <div class="card" style="width: 18rem;">
      <img class="card-img-top" height="180" src="<?= base_url() ?><?=$row['place_img']?>" alt="Card image cap">
      <div class="card-body" style="background: #e6e2e2;text-align: center;">
        <h5 class="card-title" style="text-align: center;text-decoration: underline;"><?=$row['place_name']?></h5>
        <hr>
        <a style="color:#fff;border-radius: 30px;height: 15px;" class="btn btn-primary" href="<?=base_url('hostel')?>/<?=$row['place_id']?>">หาที่พัก</a>
      </div>
    </div>
    <br>
  </div>
  <?php } ?>



</div>
</div>
</section>

<section once="" class="cid-qPnsw4QuUe" id="footer6-1h">





  <div class="container">
    <div class="media-container-row align-center mbr-white">
      <div class="col-12">
        <p class="mbr-text mb-0 mbr-fonts-style display-7">
          © Copyright 2018 EZVAC - All Rights Reserved
        </p>
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