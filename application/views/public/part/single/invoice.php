
<!DOCTYPE html>
<html class="no-js">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Invoice</title>
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
  <!-- konten lama -->
  <script src="//code.jquery.com/jquery.js"></script>
	<!-- css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/hpublic/css/style.css">
	<!-- js -->
	<script src="<?php echo base_url();?>assets/hadmin/js/jquery-3.2.1.js" type="text/javascript"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Karla|Work+Sans" rel="stylesheet">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/bootstrap-table.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/bootstrap-table.min.js"></script>

	<!-- Latest compiled and minified Locales -->
	<script src="<?php echo base_url();?>assets/hadmin/js/b-table-cn.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

	<script type="text/javascript" src="<?php echo base_url();?>assets/crop/croppie.js"></script>
	<link href="<?php echo base_url();?>assets/crop/croppie.css" rel="stylesheet" type="text/css">

	<script type="text/javascript">
		var bu = '<?php echo base_url();?>';


	</script>

	<script src="<?php echo base_url();?>assets/hpublic/js/auto_chinv.js" type="text/javascript"></script>

	<script type="text/javascript">

	</script>
  <!-- end konten lama -->

	</head>
	<body>
    <div id="jqContent">
    </div>


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
		   					<h2>Silahkan lengkapi pembayaran Anda.</h2>
		   					<p class="fh5co-lead">Kami siap melayani Anda 24/7</p>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

  <div class="container">
    <?php foreach($hotel_data as $hd):?>
    <?php endforeach;?>

    <?php foreach($inv_data as $ivd):?>
    <?php endforeach;?>

    <style type="text/css">

    .pend
    {
        color: #E91E63;
    }

    .proses
    {
        color: blue;
    }

    .selesai
    {
        color:#5cb85c ;
    }

    </style>


    <div class="container">



        <div class="hotel-content-resreve">
          <br><br>
        <h3 style="text-align:center;">Detail Pemesanan</h3>
        	<div class="left" style="width: 150; display: inline-block; vertical-align: top;">
        		<img src="<?php echo base_url().'assets/hpublic/img_hotel/'.$hd->image_vh;?>" style="    width: 150px;
        border-radius: 3px;
        border: 3px solid#ddd;">
        	</div>

        	<div class="right" style="    display: inline-block;
        vertical-align: top;
        width: 63%;">
        		<h5><?php echo $hd->name_vh;?></h5>
        	</div>

        	<div class="detail-reserve" style="margin: 10px;">
        		<table style="    width: 100%;">
    <tr style="     border-bottom: 1px solid#ddd;
        padding-bottom: 11px;
        display: block;
        width: 100%;">
                        <td style="    color: #8a8686;
        width: 188px;">Status</td>
                        <td style="    font-size: 20px;
        text-align: right;
        width: 100%;">
        <?php

            $status = $ivd->status_inv;

            if($status == 0)
            {
                echo "<span class='pend'>Menunggu Pembayaran</span>";
            }
            elseif($status == 1)
            {
                echo "<span class='proses'>Proses Konfirmasi</span>";
            }
            elseif($status == 2)
            {
                echo "<span class='selesai'>Pembayaran Selesai</span>";
            }
            elseif($status == 9)
            {
                echo "<span class='pend'>Dibatalkan</span>";
            }

        ?>

        </td>
                    </tr>
    <tr style="     border-bottom: 1px solid#ddd;
        padding-bottom: 11px;
        display: block;
        width: 100%;">
                        <td style="    color: #8a8686;
        width: 188px;">ID Pemesanan</td>
                        <td style="    font-size: 20px;
        text-align: right;
        width: 100%;">
        <?php echo $ivd->code_inv;?></td>
                    </tr>
    <tr style="     border-bottom: 1px solid#ddd;
        padding-bottom: 11px;
        display: block;
        width: 100%;">
                        <td style="    color: #8a8686;
        width: 188px;">Nama Pemesan</td>
                        <td style="    font-size: 20px;
        text-align: right;
        width: 100%;">
        <?php echo $ivd->name_inv;?></td>
                    </tr>
    <tr style="     border-bottom: 1px solid#ddd;
        padding-bottom: 11px;
        display: block;
        width: 100%;">
                        <td style="    color: #8a8686;
        width: 188px;">No. Telp / Whatsapp</td>
                        <td style="    font-size: 20px;
        text-align: right;
        width: 100%;">
        <?php echo $ivd->handphone_inv;?></td>
                    </tr>
        			<tr style="     border-bottom: 1px solid#ddd;
        padding-bottom: 11px;
        display: block;
        width: 100%;">
        				<td style="    color: #8a8686;
        width: 188px;">Berangkat</td>
        				<td style="    font-size: 20px;
        text-align: right;
        width: 100%;"><?php echo exDate($ivd->start_date);?></td>
        				<br>
        			</tr>
        			<tr style="     border-bottom: 1px solid#ddd;
        padding-bottom: 11px;
        display: block;
        width: 100%;">
        				<td style="    color: #8a8686;
        width: 188px;">Durasi Sewa</td>
        				<td style="    font-size: 20px;
        text-align: right;
        width: 100%;">
        <?php echo $ivd->long_inv.' Hari';?>
        <br><span style="font-size: 12px; font-weight: bold;"><?php echo '(Selesai Sewa :'.exDate($ivd->finish_date).')';?></span></td>
        			</tr>
                    <tr style="     border-bottom: 1px solid#ddd;
        padding-bottom: 11px;
        display: block;
        width: 100%;">
                        <td style="    color: #8a8686;
        width: 188px;">Tujuan</td>
                        <td style="    font-size: 20px;
        text-align: right;
        width: 100%;">
        <?php echo $ivd->destination_inv;?></td>
                    </tr>
        		</table>
    <div class="total-reserver" style="width: 100%;
        background: #f5b120;
        padding: 10px;
        margin-top: 10px;
        border-radius: 3px;">
        				<span><strong>Total yang harus dibayar: </strong></span><span><strong><?php echo 'Rp. '.rpCurrency($ivd->total_inv);?></strong></span>
        		</div>

        <?php if($status == 0):?>
        <div class="time-left" style="background:#2b2b2b;">
            <span style="font-size: 20px;">Sisa Waktu Pembayaran</span>
            <br>
            <div id="timer"></div>
        </div>
        <?php else:?>
        <?php endif;?>

        <div class="bank" style="text-align: center;
        padding: 4px;
        margin: auto;
        margin-top: 5px;
        border: 1px solid#ddd;
        width: 50%;">
            <strong>Pembayaran melalui Bank <?php echo $ivd->name_bank;?></strong>
            <br>
            <strong>No.rek : <?php echo $ivd->acc_bank;?></strong>
            <br>
            <strong>Atas nama : <?php echo $ivd->owner_bank;?></strong>
        </div>

        </div>

    </div>


    <script type="text/javascript">


    function timer()
    {
        $('#timer').load(bu+'public/invoice/timer/<?php echo $ivd->code_inv;?>');
    }

    setInterval(timer, 1000 );

    // confirmation payment
    $(document).on('click', '.conf', function(){

        $('#jqContent').load(bu+'public/invoice/conf_invoice/<?php echo $ivd->code_inv;?>');
        $('#jqContent').slideDown('400');

    });

    $(document).on('submit', '#confForm', function(){

        $.ajax({

            url:bu+'public/invoice/process_invoice',
            type:'POST',
            data:new FormData(this),
            contentType:false,
            processData:false,
            success:function(data)
            {
                alert(data);
                window.location.href=window.location.href;
            }

        });

        return false;

    });


    </script>


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

	</body>
</html>


<!-- start -->
<!-- start -->
<!-- end -->
