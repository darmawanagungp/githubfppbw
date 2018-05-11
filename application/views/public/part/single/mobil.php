
<!DOCTYPE html>
<html class="no-js">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Form Pemesanan</title>
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

  <link rel="stylesheet" href="<?php echo base_url();?>assets/hadmin/css/timepicker.css">

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
		   					<h2>Silahkan melengkapi form pemesanan Anda.</h2>
		   					<p class="fh5co-lead">Hubungi kami jika Anda memerlukan bantuan.</p>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside><br><br>


<div class="container">
  <?php foreach($mobil_data as $hd):?>
  <?php endforeach;?>
  <!-- title -->

  <!-- <div class="breadcumb container" style="font-size: 20px;" style="text-align: center;">
      <span>Home > Mobil > <?php echo $hd->name_vh;?></span>
  </div> -->


  <div class="single-hotel-wrapper container">
          <h3><?php echo $hd->name_vh;?></h3>

  	<div class="left">
  		<img src="<?php echo base_url().'assets/hpublic/img_hotel/'.$hd->image_vh;?>" style="    margin-top: 39px;">
  	</div>

  	<div class="right">

          <!-- PRICE PART -->
  	    <div class="price">
  	    	<span style="color: #a9a7a7;">Harga per hari</span>
  	    	<div class="hbtn-price">
  	    			<?php echo 'Rp. '.rpCurrency($hd->price_vh);?>
  	    	</div>
  	    </div>
          <!-- END PRICE PART -->

          <!--  INFO PART -->
          <div class="info-wrapper">
              <h3>Deskripsi</h3>
      		<span><?php echo $hd->desc_vh;?></span>
  		</div>
          <!-- END INFO PART -->

  	</div>
</div>


	<div class="fh5co-contact animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
          <ul class="contact-info">
						<h3>Perhatian</h3>
						<p style="text-align:justify">Untuk pelanggan di wajibkan memberikan :</p>
						<p style="text-align:justify"><strong>1 Lembar</strong> foto copy KTP.</p>
						<p style="text-align:justify"><strong>1 Lembar</strong> foto copy SIM A.</p>
            <p style="text-align:justify">Uang Jaminan.</p>
					</ul>
				</div>

				<div class="col-md-8 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
          <h3>Form pemesanan untuk mobil <?php echo $hd->name_vh;?></h3>
					<div class="row">
					<form method="post" action="<?php echo base_url();?>cpublic/p_process_form">

          		<input type="hidden" name="idvh" value="<?php echo $hd->id_vh;?>">
                  <input type="hidden" name="price" value="<?php echo $hd->price_vh;?>">

						<div class="col-md-6">
							<div class="form-group">
                <label>Nama Depan</label>
								<input class="form-control" name="fname" id="datepicker" placeholder="Nama" type="text" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
                <label>Nama Belakang</label>
								<input class="form-control" id="duration" name="lname" placeholder="Nama Belakang" type="text" required>
							</div>
						</div>
            <div class="col-md-6">
							<div class="form-group">
                <label>Email</label>
								<input class="form-control" name="email" id="datepicker" placeholder="Email" type="email" required>
							</div>
						</div>
            <div class="col-md-6">
							<div class="form-group">
                <label>No. Handphone</label>
								<input class="form-control" name="hp" id="datepicker" placeholder="No. Handphone" type="text" required>
							</div>
						</div>
            <div class="col-md-12">
							<div class="form-group">
                <label>Tujuan</label>
								<textarea name="destination" class="form-control" id="" cols="30" rows="7" placeholder="Alamat Tujuan / Lokasi Tujuan" required></textarea>
							</div>
						</div>
            <div class="col-md-6">
							<div class="form-group">
                <label>Tanggal dan Waktu</label>
                <input type="text" name="startdate" id="datepicker" class="form-control startdate" placeholder="Tanggal" required>
                <input type="text" id="duration"  name="starttime" class="form-control starttime" placeholder="Waktu"  required>
							</div>
						</div>
            <div class="col-md-6">
							<div class="form-group">
                <label>Lama Sewa</label>
								<input class="form-control" name="long" id="datepicker" placeholder="Lama Sewa (Hari)" type="text" required>
							</div>
						</div>
            <div class="col-md-12">
							<div class="form-group">
                <label>Pilih Bank Pembayaran</label>
                <select name="bank" class="form-control" required="">

                    <option value="">-- Pilih Pembayaran --</option>
                <?php foreach($bank_data as $bd):?>
                    <option value="<?php echo $bd->id_bank;?>"><?php echo $bd->name_bank;?></option>
                <?php endforeach;?>

                </select>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input value="Kirim Pesan" class="btn btn-primary" type="submit">
							</div>
						</div>
					</form>
					</div>
				</div>
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
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="<?php echo base_url().'theme/js/google_map.js'?>"></script>

	<!-- MAIN JS -->
	<script src="<?php echo base_url().'theme/js/main.js'?>"></script>

  <script src="<?php echo base_url();?>assets/hpublic/js/timepicker.js"></script>

  <script>

  $( function() {
    $( ".startdate" ).datetimepicker({ timepicker:false, format: 'd-m-Y' });



  });
  jQuery('.starttime').datetimepicker({
    datepicker:false,
    format:'H:i'
  });

  </script>



	</body>
</html>







<!-- akhir -->
<!-- akhir  -->
