
<!DOCTYPE html>
<html class="no-js">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cek Pemesanan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="Darmawan Agung" />
	<link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/favicon.png'?>">
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url().'theme/css/animate.css'?>">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url().'theme/css/icomoon.css'?>">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.css'?>">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?php echo base_url().'theme/css/flexslider.css'?>">
	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url().'theme/css/style.css'?>">

	<!-- Modernizr JS -->
	<script src="<?php echo base_url().'theme/js/modernizr-2.6.2.min.js'?>"></script>

	</head>
	<body>


	<div id="fh5co-page">
	<header id="fh5co-header" role="banner">
		<div class="container">
			<div class="header-inner">
				<h1><a href="<?php echo base_url().''?>">Rental Edi<span></span></a></h1>
				<nav role="navigation">
					<ul>
						<li><a href="<?php echo base_url();?>home">Home</a></li>
		        <li><a href="<?php echo base_url();?>kendaraan">Kendaraan</a></li>
		        <li><a href="<?php echo base_url();?>ordercheck">Cek Pemesanan</a></li>
						<li><a href="<?php echo base_url();?>aboutUs">About Us</a></li>
						<li><a href="<?php echo base_url();?>kontak">Contact Us</a></li>
            <li class="cta"><a href="<?php echo base_url().'kendaraan'?>">Get started</a></li>

		        <?php foreach($menu as $md):?>
    				<?php if(count($menu)>0):?>
    				<li>
    					<a href="<?php echo base_url().'/page/'.url_title($md->name_page, '-', TRUE);?>">
    						<?php echo $md->name_page;?>
    					</a>
    				</li>
    				<?php else:?>
    				<?php endif;?>
    				<?php endforeach;?>
					</ul>
				</nav>
			</div>
		</div>
	</header>


	<aside id="fh5co-hero" clsas="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(<?php echo base_url().'theme/images/slide_3.jpg'?>);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2>Silahkan Cek Pesanan Mobil Anda.</h2>
		   					<p class="fh5co-lead">Masukkan kode pembayaran dan nomer handphone Anda</p>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	<div class="fh5co-contact animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<ul class="contact-info">
						<h3>Informasi.</h3>
						<p style="text-align:justify">Lengkapi isian di samping untuk melakukan pengecekan pemesanan mobil Anda.</p>
						<p style="text-align:justify"><strong>ID Pemesanan</strong> adalah 13 digit angka yang terdapat di email pemesanan atau voucher memesan / booking <?php echo $title_web;?> yang dikirim ke alamat email Anda.</p>
						<p style="text-align:justify"><strong>No.Handphone</strong> adalah nomor telepon / handphone yang digunakan ketika melakukan pemesanan mobil di <?php echo $title_web;?>.</p>
					</ul>
				</div>

				<div class="col-md-8 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
				<?php echo $this->session->flashdata('msg');?>
					<div class="row">
					<form method="post" action="<?php echo base_url().'ordercheck/process'?>">
						<div class="col-md-6">
							<div class="form-group">
								<span>Masukan ID Pemesanan anda disini</span>
								<input class="form-control" name="orderId" placeholder="ID Pemesanan" type="text" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
					    	<span>Masukan No.Handphone pada saat pemesanan</span>
								<input class="form-control" name="noHp" placeholder="Masukan no Handphone(WhatsApp)" type="text" required>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input value="Cek Pemesanan" class="btn btn-primary" type="submit">
							</div>
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>



	</div>


	<!-- jQuery -->
	<script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url().'theme/js/jquery.easing.1.3.js'?>"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url().'theme/js/jquery.waypoints.min.js'?>"></script>
	<!-- Flexslider -->
	<script src="<?php echo base_url().'theme/js/jquery.flexslider-min.js'?>"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="<?php echo base_url().'theme/js/google_map.js'?>"></script>

	<!-- MAIN JS -->
	<script src="<?php echo base_url().'theme/js/main.js'?>"></script>

	</body>
</html>
