<!doctype html>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<title><?php echo $title ?></title>
		<!-- Bootstrap core CSS -->
        <link href="<?php echo base_url('assets/AdminLTE-2.0.5/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
		<!-- Custom styles for this template -->
		<link href="<?php echo base_url('assets/flat-ui/flat-ui.css'); ?>" rel="stylesheet" >
		<link href="<?php echo base_url('assets/flat-ui/style.css'); ?>" rel="stylesheet" >
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
	<div class="container">
		<div class="row row-centered demo-tiles">
			<a class="" href="<?php echo site_url('auth/register?type=2'); ?>">
				<div class="col-md-4 col-xs-3">
					<div class="tile">
						<img src="<?php echo base_url('assets/image/lorem.png'); ?>" alt="FIDUSIA" class="tile-image big-illustration">
						<h3 class="tile-title">FIDUSIA</h3>
						<p>Klik tautan ini</br> untuk pendaftaran fidusia</p>
						<button class="btn btn-primary btn-large btn-block">SELENGKAPNYA</button>
					</div>
				</div>
			</a>
			<a class="" href="<?php echo site_url('auth/register?type=1'); ?>">
				<div class="col-md-4 col-xs-3">
					<div class="tile">
						<img src="<?php echo base_url('assets/image/lorem.png'); ?>" alt="WAARMEKING" class="tile-image big-illustration">
						<h3 class="tile-title">WAARMEKING</h3>
						<p>Klik tautan ini </br>untuk pendaftaran waarmeking</p>
						<button class="btn btn-primary btn-large btn-block" href="">SELENGKAPNYA</button>
					</div>
				</div>
			</a>
			<a class="" href="<?php echo site_url('auth/register?type=3'); ?>">
				<div class="col-md-4 col-xs-3">
					<div class="tile">
						<img src="<?php echo base_url('assets/image/lorem.png'); ?>" alt="LEGALISASI" class="tile-image big-illustration">
						<h3 class="tile-title">LEGALISASI</h3>
						<p>Klik tautan ini </br>untuk pendaftaran legalisasi</p>
						<button class="btn btn-primary btn-large btn-block" href="">SELENGKAPNYA</button>
					</div>
				</div>
			</a>
		</div>
		</div> <!-- /container -->
		<div class="clearfix">
		</div>
		<script src="assets/js/flat-ui.min.js"></script>
	</div>
</body>
</html>