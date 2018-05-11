<!DOCTYPE html>
<html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>
			<?php
			// memanggil judul web
				echo title_web().' | '.slogan_web();
		   	?>
	</title>
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
				<h1><a href="<?php echo base_url().''?>">Rental Mobil Edi<span></span></a></h1>
				<nav role="navigation">
					<ul>
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


	<aside id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(<?php echo base_url().'theme/images/its_1.jpg'?>);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2>Selamat Datang Di Rental Mobil Edi</h2>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(<?php echo base_url().'theme/images/its_2.jpg'?>);">
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2>Jangan ragu untuk menanyakan hal apapun kepada kami</h2>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(<?php echo base_url().'theme/images/its_3.jpg'?>);">
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2>Silahkan memilih mobil sesuai keinginan Anda</h2>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	<div class="fh5co-team animate-box">
		<div class="container">

				<div class="row">
									<?php
									if($i===NULL||$i<=0)
									{$i = 1;
									$j = 6;}
									$k = 1; $display = "none";
									?>
									<?php foreach($mobil_data as $rhotel):?>
								<?php
									if($k>=$i&&$k<=$j){
										$display = "inline-block";
									}else{
										$display = "none";
									}
									$k++;
								 ?>
									<div style='display: <?php echo $display; ?>; margin: 1%; margin-bottom:5%;'>
									<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
									<div class="col-md-4 fh5co-staff">
									<img class='card-img-top' src="<?php echo base_url().'assets/hpublic/img_hotel/'.$rhotel->image_vh;?>" alt="Free HTML5 Bootstrap Template" class="img-responsive">
									<div class='card-body'>
										<h2 class='card-title'><?php echo 'Rp. '.rpCurrency($rhotel->price_vh).'/hari';?></h2>
										<p class='card-text'><?php echo $rhotel->name_vh;?></p>
										<p class='card-text'><?php echo $rhotel->name_cat;?></p>
										<a href='<?php echo base_url().'kendaraan/'.$rhotel->slug_vh;?>' class='btn btn-primary'>Book Now</a>
									</div>
									</div>
								</div>

									</div>
									<?php endforeach;?>
									<?php $d = "inline-block";
									$k--;
										if($i+6>$k){
											$d="none";
										}
									?>
									<div class="container" style="display: block;" class="">

									<center><form class="" style="display: inline-block;" action="kendaraan" method="post">
										<input style="display: none;" type="text" name="i" value=<?php echo $i-6; ?>>
										<input style="display: none;" type="text" name="j" value=<?php echo $j-6; ?>>
										<button class="btn btn-primary" type="submit" name="" value="">prev</button>
									</form>

									<form class="" style="display: <?php echo $d; ?>" action="kendaraan" method="post">
										<input style="display: none;" type="text" name="i" value=<?php echo $i+6; ?>>
										<input style="display: none;" type="text" name="j" value=<?php echo $j+6; ?>>
										<button class="btn btn-primary" type="submit" name="" value="">next</button>

									</form></center>

								</div>
								<br></br>
					</div>
				</div>
		</div>



	<?php $this->load->view('public/template/footer');?>
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

	<!-- MAIN JS -->
	<script src="<?php echo base_url().'theme/js/main.js'?>"></script>

	</body>
</html>
