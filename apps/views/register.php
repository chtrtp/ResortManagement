<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>EZVAC | LOGIN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/main.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<script type="text/javascript">
	$(document).ready(function(){3
		$("#notdata").modal("show");
		$("#erruser").modal("show");
		$("#passerr").modal("show");
		$("#success").modal("show");
	});

</script>
<body>

	<?php if(isset($_GET["notdata"])) { ?>

	<div id="notdata" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">
						<h4 class="modal-title">แจ้งเตือน</h4>
					</div>
					<div class="modal-body">
						<p>กรอกข้อมูลให้ครบถ้วน</p>
					</div>
					<div class="modal-footer">
						<a href="<?=base_url('register')?>"><button type="button" name="submitdel" class="btn btn-danger">ปิด</button></a> 
					</div>
				</form>
			</div>
		</div>
	</div>

	<?php } ?>


	<?php if(isset($_GET["user_err"])) { ?>

	<div id="erruser" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">
						<h4 class="modal-title">แจ้งเตือน</h4>
					</div>
					<div class="modal-body">
						<p>username นี้ถูกใช้แล้ว</p>
					</div>
					<div class="modal-footer">
						<a href="<?=base_url('register')?>"><button type="button" name="submitdel" class="btn btn-danger">ปิด</button></a> 
					</div>
				</form>
			</div>
		</div>
	</div>

	<?php } ?>

	<?php if(isset($_GET["pass_err"])) { ?>

	<div id="passerr" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">
						<h4 class="modal-title">แจ้งเตือน</h4>
					</div>
					<div class="modal-body">
						<p>พาสเวิร์ดไม่ตรงกัน</p>
					</div>
					<div class="modal-footer">
						<a href="<?=base_url('register')?>"><button type="button" name="submitdel" class="btn btn-danger">ปิด</button></a> 
					</div>
				</form>
			</div>
		</div>
	</div>

	<?php } ?>

	<?php if(isset($_GET["success"])) { ?>

	<div id="success" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">
						<h4 class="modal-title">แจ้งเตือน</h4>
					</div>
					<div class="modal-body">
						<p>ลงทะเบียนเรียบร้อยแล้ว</p>
					</div>
					<div class="modal-footer">
						<a href="<?=base_url('/')?>"><button type="button" name="submitdel" class="btn btn-danger">ปิด</button></a> 
					</div>
				</form>
			</div>
		</div>
	</div>

	<?php } ?>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form method="post" class="login100-form validate-form flex-sb flex-w" action="<?=base_url('register/check')?>">
					<span class="login100-form-title p-b-32">
						Account Register
					</span>

					<span class="txt1 p-b-11">
						Username or Email
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input class="input100" type="text" name="username" >
						<span class="focus-input100"></span>
					</div>

					<span class="txt1 p-b-11">
						Fullname
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input class="input100" type="text" name="fullname" >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="password" >
						<span class="focus-input100"></span>
					</div>

					<span class="txt1 p-b-11">
						Confirm Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="password2" >
						<span class="focus-input100"></span>
					</div>
					
					

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">

							Register

						</button>
					</div>



				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	<script src="<?= base_url() ?>vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?= base_url() ?>vendor/animsition/js/animsition.min.js"></script>
	<script src="<?= base_url() ?>vendor/bootstrap/js/popper.js"></script>
	<script src="<?= base_url() ?>vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>vendor/select2/select2.min.js"></script>
	<script src="<?= base_url() ?>vendor/daterangepicker/moment.min.js"></script>
	<script src="<?= base_url() ?>vendor/daterangepicker/daterangepicker.js"></script>
	<script src="<?= base_url() ?>vendor/countdowntime/countdowntime.js"></script>
	<script src="<?= base_url() ?>js/main.js"></script>

</body>
</html>