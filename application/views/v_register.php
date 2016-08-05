<!doctype html>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		<title><?php echo $title ?></title>
		<!-- Custom styles for this template -->
		<link href="<?php echo base_url('assets/flat-ui/flat-ui.css'); ?>" rel="stylesheet" >
		<link href="<?php echo base_url('assets/flat-ui/style.css'); ?>" rel="stylesheet" >
        <!-- Bootstrap 3.3.2 -->
        <link href="<?php echo base_url('assets/AdminLTE-2.0.5/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- Font Awesome Icons -->
        <link href="<?php echo base_url('assets/font-awesome-4.3.0/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?php echo base_url('assets/ionicons-2.0.1/css/ionicons.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url('assets/AdminLTE-2.0.5/dist/css/AdminLTE.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- AdminLTE Skins. Choose a skin from the css/skins 
             folder instead of downloading all of them to reduce the load. -->
        <link href="<?php echo base_url('assets/AdminLTE-2.0.5/dist/css/skins/_all-skins.min.css') ?>" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<!-- Static navbar -->
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<div class="navbar-header">
					</button>
					<a class="navbar-brand" href="#">Personal Assistant</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<!-- <ul class="nav navbar-nav">
						<li class="active"><a href="<?php //echo base_url();?>"><i class="glyphicon glyphicon-home"></i> Home</a></li>
					</ul> -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#bantuan"><i class="glyphicon glyphicon-info-sign"></i> Bantuan</a></li>
							<li><a href="<?php echo site_url('auth')?>"><i class="glyphicon glyphicon-log-in"></i> Login</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
	<section class="container">
		<div class="col-md-5 box box-solid box-primary">
		 <div class="box-header with-border">
			<h3 class="box-title">Pendaftaran Akun</h3>
			</div>
			<form class="box-tools pull-right" method="post" action="<?php echo site_url('auth/register'); ?>">
				<div class="form-group">
					<label for="name" class="cols-sm-2 control-label">Nama Lengkap</label>
					<div class="cols-sm-10">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-pencil" aria-hidden="true"></i></span>
							<input type="text" class="form-control" name="name" id="name"  placeholder="Masukkan Nama Lengkap" value="<?php echo set_value('name'); ?>"/>
							<p><?php echo form_error('name'); ?></p>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="username" class="cols-sm-2 control-label">Username</label>
					<div class="cols-sm-10">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
							<input type="text" class="form-control" name="username" id="username"  placeholder="Masukkan Nama Lengkap" value="<?php echo set_value('username'); ?>"/>
							<p><?php echo form_error('username'); ?></p>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="email" class="cols-sm-2 control-label">Email</label>
					<div class="cols-sm-10">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i></span>
							<input type="text" class="form-control" name="email" id="email"  placeholder="Masukkan Email" value="<?php echo set_value('email'); ?>"/>
							<p><?php echo form_error('email'); ?></p>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="email" class="cols-sm-2 control-label">Address</label>
					<div class="cols-sm-10">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-home" aria-hidden="true"></i></span>
							<textarea class="form-control" rows="3" name="address" id="address"  placeholder="Masukkan Alamat" value="<?php echo set_value('address'); ?>"></textarea>
							<p><?php echo form_error('address'); ?></p>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="handphone" class="cols-sm-2 control-label">No. Handphone</label>
					<div class="cols-sm-10">
						<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt" aria-hidden="true"></i></span>
							<input type="text" class="form-control" name="handphone" id="handphone"  placeholder="Masukkan No. Handphone" value="<?php echo set_value('handphone'); ?>"/>
							<p><?php echo form_error('handphone'); ?></p>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="katasandi" class="cols-sm-2 control-label">Kata sandi</label>
					<div class="cols-sm-10">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock" aria-hidden="true"></i></span>
							<input type="password" name="password" class="form-control" id="katasandi"  placeholder="Masukkan Katasandi" value="<?php echo set_value('password'); ?>"/>
							<p><?php echo form_error('password'); ?></p>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="katasandi" class="cols-sm-2 control-label">Konfirmasi Kata sandi</label>
					<div class="cols-sm-10">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock" aria-hidden="true"></i></span>
							<input type="password" name="password_conf" class="form-control" id="katasandi"  placeholder="Masukkan Katasandi" value="<?php echo set_value('password_conf'); ?>"/>
							<p><?php echo form_error('password_conf'); ?></p>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-offset-3 col-xs-9">
						<label class="checkbox-inline">
							<input type="checkbox" value="Setuju"/>  Saya Setuju dengan <a href="#">Kebijakan dan Ketentuan</a> yang berlaku.
						</label>
					</div>
				</div>
				<input type="text" name="typeuser" value="<?php if(isset($_GET['type'])){echo $_GET['type'];} ?>" style="visibility:hidden;">
				<div class="form-group ">
					<button type="submit" class="btn btn-primary btn-lg btn-block login-button">Daftar</button>
				</div>
			</form>
			<p>
				Kembali ke beranda, Silakan klik <?php echo anchor(site_url(), 'di sini..'); ?>
			</p>
			</div><!-- /container -->
			<div class="clearfix">
			</div>
			<script src="assets/js/flat-ui.min.js"></script>
		</section>
	</body>
</html>