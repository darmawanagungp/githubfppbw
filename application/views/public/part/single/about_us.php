
<!DOCTYPE html>
<html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>About Us</title>
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


	<aside id="fh5co-hero" clsas="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(<?php echo base_url().'theme/images/slide_3.jpg'?>);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2>Who We Are</h2>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	<div class="fh5co-about animate-box">
		<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
			<h2>About Us</h2>
			<p>Tentang Rental Mobil Bapak Edi</p>
		</div>
		<div class="container">
			<div class="col-md-6">
				<figure>
					<img src="<?php echo base_url().'theme/images/image_1.jpg'?>" alt="Free HTML5 Template" class="img-responsive">
				</figure>
			</div>
			<div class="col-md-6">
				<h3>Visi</h3>
				<ul>
					<li>Menjadi perusahaan terkemuka dan terpercaya dalam jasa penyewaan mobil di Surabaya yang berbasis Internet.</li>
					<li>Mengedepankan kejujuran dan kekeluargaan dalam menjalankan perusahaan.</li>
					<li>Menciptakan lingkungan usaha dan pertumbuhan usaha yang sehat dalam rangka memenuhi kebutuhan pelanggan.</li>
				</ul>
				<h3>Misi</h3>
				<ul>
					<li>Menyediakan kebutuhan armada rental mobil dengan kualitas terbaik dan terlengkap dengan harga ekonomis.</li>
					<li>Membina hubungan baik dengan para pelanggan dan mitra usaha.</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="fh5co-team animate-box">
		<div class="container">

				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
						<h2>The Team</h2>
						<p>Kami memiliki team yang solid. one team, one spirit, and one goal.</p>
					</div>
					<div class="col-md-4 fh5co-staff">
						<img src="<?php echo base_url().'theme/images/dosen_2.jpg'?>" alt="Free HTML5 Bootstrap Template" class="img-responsive">
						<h3>Darmawan Agung</h3>
						<h4>IT Support</h4>
						<p>Darmawan Agung adalah seorang mahasiswa jurusan teknologi di salah satu perguruan tinggi di daerah Jawa Timur dan bertanggung jawab atas segala kebutuhan IT di Rental Edi.</p>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-google"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-instagram"></i></a></li>
						</ul>
					</div>
					<div class="col-md-4 fh5co-staff">
						<img src="<?php echo base_url().'theme/images/dosen_3.jpg'?>" alt="Free HTML5 Bootstrap Template" class="img-responsive">
						<h3>Sisca Agatha</h3>
						<h4>IT Support</h4>
						<p>Sisca Agatha adalah seorang mahasiswa jurusan teknologi di salah satu perguruan tinggi di daerah Jawa Timur dan bertanggung jawab atas segala kebutuhan IT di Rental Edi.</p>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-google"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-instagram"></i></a></li>
						</ul>
					</div>
					<div class="col-md-4 fh5co-staff">
						<img src="<?php echo base_url().'theme/images/dosen_1.jpg'?>" alt="Free HTML5 Bootstrap Template" class="img-responsive">
						<h3>Bapak Edi</h3>
						<h4>Owner</h4>
						<p>Bapak Edi merupakan salah satu entrepreneur yang bergerak di bidang persewaan mobil dan saat ini mengepalai Edi Rental yang beralamat di Keputih-Surabaya</p>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-google"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-instagram"></i></a></li>
						</ul>
					</div>
				</div>
		</div>
	</div>


	<div class="fh5co-team animate-box">
		<div class="container">

				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
						<h2>Fasilitas & Layanan</h2>
						<p>Kami memiliki berbagai fasilitas yang dapat meningkatkan kenyamanan Anda.</p>
					</div>
					<div class="col-md-4 fh5co-staff">
						<img src="<?php echo base_url().'theme/images/fas_1.jpg'?>" alt="Free HTML5 Bootstrap Template" class="img-responsive">
						<h3>Layanan Delivery Mobil</h3>
						<h4><em>Car Delivery</em></h4>
						<p>Anda cukup memesan dan menunggu di mobil Anda diantar dirumah Anda.</p>
					</div>
					<div class="col-md-4 fh5co-staff">
						<img src="<?php echo base_url().'theme/images/fas_2.jpg'?>" alt="Free HTML5 Bootstrap Template" class="img-responsive">
						<h3>Mobil Bersih dan Baru</h3>
						<h4><em>Clean and New Car for Rent</em></h4>
						<p>Kami selalu berusaha untuk menyediakan mobil terbaik dalam setiap pemesanan yang Anda lakukan.</p>
					</div>
					<div class="col-md-4 fh5co-staff">
						<img src="<?php echo base_url().'theme/images/fas_3.jpg'?>" alt="Free HTML5 Bootstrap Template" class="img-responsive">
						<h3>Tempat Pemesanan Nyaman</h3>
						<h4><em>Comfortable Rent Place</em></h4>
						<p>Kami menyediakan tempat penyewaan mobil di kantor kami yang dapat membuat Anda nyaman.</p>
					</div>
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
