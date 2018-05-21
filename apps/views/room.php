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

<script type="text/javascript">
  $(document).ready(function () {
    $('#carouselExampleControls').find('.carousel-item').first().addClass('active');
  });
  function sss(){
    $("#myModal").modal('show');
  }
  
</script>

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
        <a class="nav-link link text-white display-4" href="/managment/requestform">
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
<section class="features4 cid-qPn6AExY8A" id="features4-r">
  <div class="container">
    <?php 
    foreach ($hostel->result_array() as $row){ ?>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb" style="background-color:#fff">
        <li class="breadcrumb-item active" aria-current="page"><?=$row['hostel_name']?> 
          <?php if($row['hostel_level'] == 1 ) { ?>
          ( <i class="fas fa-star"></i> )
          <?php } ?>
          <?php if($row['hostel_level'] == 2 ) { ?>
          ( <i class="fas fa-star"></i><i class="fas fa-star"></i> )
          <?php } ?>
          <?php if($row['hostel_level'] == 3 ) { ?>
          ( <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> )
          <?php } ?>
          <?php if($row['hostel_level'] == 4 ) { ?>
          ( <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> )
          <?php } ?>
          <?php if($row['hostel_level'] == 5 ) { ?>
          ( <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> )
          <?php } ?>
        </li>
      </ol>
    </nav>
    <?php } ?>
    <br>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <?php 
        foreach ($hostelimg->result_array() as $row){ ?>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?= base_url() ?><?=$row['hostel_photo_src']?>" alt="">
        </div>
        <?php } ?>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <br>

    <div class="row">
      <?php 
      foreach ($hostel->result_array() as $row){ ?>
      <div class="col-xl-4">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb" style="background-color:#fff">
            <li class="breadcrumb-item active" aria-current="page" style="color: #1e86f5">ตำแหน่ง : <?=$row['hostel_address']?></li>
          </ol>
        </nav>
      </div>
      <div class="col-xl-8">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb" style="background-color:#fff">
            <li class="breadcrumb-item active" aria-current="page" style="color: #ff8300">โทรศัพท์ : <?=$row['hostel_phone']?></li>
          </ol>
        </nav>
      </div>
      <div class="col-xl-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb" style="background-color:#fff">
            <li class="breadcrumb-item active" aria-current="page" style="color: #f92e6e">สิ่งอำนวยความสะดวก : <?=$row['hostel_facilities']?></li>
          </ol>
        </nav>
      </div>
    </div>
    <?php } ?>
  </div>

  <div class="container">

    <ul class="list-unstyled">

      <?php 
      foreach ($room->result_array() as $row){ ?>

      <li class="media" style="background-color: #fff;padding: 12px;">
        <img class="mr-3" width="150" height="120"  src="<?= base_url() ?><?=$row['room_photo_src']?>" alt="Generic placeholder image">
        <div class="media-body">
          <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
             <h5 class="mt-0 mb-1" style="float: left;"><a href="" style="text-decoration: underline;color: black;"><?=$row['room_type_name']?></a></h5>
           </div>
           <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
             <h5 class="mt-0 mb-1" style="float: right;color:#e01919 ">THB : <?=number_format($row['room_price'])?> / คืน</h5>
           </div>
           <div class="col-xl-6 col-lg-6 col-md-6 col-sm-5 col-xs-12">
             <p><h6><i class="fas fa-users"></i> จำนวนผู้เข้าพักสูงสุด : <?=$row['maximum_User']?> คน</h6></p>
             <p><h6><i class="fas fa-bed"></i> เตียง : <?=$row['room_bed']?></h6></p>
             <p><h6><i class="fas fa-couch"></i> อุปกรณ์ : <?=$row['room_accessories']?></h6></p>
             <p><h6><i class="fas fa-bath"></i> ห้องน้ำ : <?=$row['room_toilet']?></h6></p>
             <p><h6><i class="fas fa-ellipsis-h"></i> อื่นๆ : <?=$row['room_other']?></h6></p>
           </div>
           <div class="col-xl-6 col-lg-6 col-md-6 col-sm-7 d-none d-sm-block">
             <p>
              <?php
              if(isset($_SESSION['sign_in']) && $_SESSION['sign_in'] == "loged"){ ?>

              <button type="button" class="btn btn" style="background-color: #579a53;color: white;float: right;" onclick='$("#booking<?=$row['room_id']?>").modal("show")'>จองห้อง</button>
              <?php }else{ ?>


              <a href="<?=base_url('login')?>"><button type="button" class="btn btn" style="background-color: #579a53;color: white;float: right;">จองห้อง</button></a>


              <?php } ?>
              
              
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

<?php 
foreach ($room->result_array() as $row){ ?>
<div id="booking<?=$row['room_id']?>" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">จองห้อง : <?=$row['room_type_name']?></h4>
       
      </div>
      <div class="modal-body">
        <form role="form" method="post" action="<?=base_url('/booking')?>">
          <div class="row">
             <input type="text" name="idroom" id="idroom" value="<?=$row['room_id']?>" hidden>
           <div class="col-lg-6">
            <div class="form-group">
              <label for="name" class="control-label">ชื่อผู้จอง:</label>
              <input type="text" class="form-control" name="name" placeholder="ชื่อผู้จอง">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label for="phone" class="control-label">เบอร์โทรศัพท์:</label>
              <input type="text" class="form-control" name="phone" placeholder="เบอร์โทรศัพท์">
            </div>
          </div>
          <div class="col-lg-12">
            <div class="form-group">
              <label for="email" class="control-label">Email:</label>
              <input type="text" class="form-control" name="email" placeholder="อีเมลล์">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label for="checkin" class="control-label">เช็คอิน</label>
              <input type="date" class="form-control" name="checkin" >
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label for="checkout" class="control-label">เช็คเอาท์</label>
              <input type="date" class="form-control" name="checkout">
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