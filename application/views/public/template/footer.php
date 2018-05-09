<footer id="fh5co-footer" role="contentinfo">

		<div class="container">
			<div class="col-md-3 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
				<h3>Payment</h3>
				<p>Kami menerima pembayaran melalui:</p>
        <div>
          <?php foreach($bank_data as $bd):?>
    				<div class="pay" style="width: 67px;
        height: 38px;
        background: #fff;
        margin: auto;
        text-align: center;
        display: inline-block;
        vertical-align: top;
        padding: 4px;
        border-radius: 4px;">
    					<img src="<?php echo base_url().'assets/hpublic/img_bank/'.$bd->logo_bank;?>" style="width: 100%;">
    				</div>
    			<?php endforeach;?>

        </div>


			</div>
			<div class="col-md-6 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
				<h3>Panel</h3>
				<ul class="float">
          <li><a href="<?php echo base_url();?>home">Home</a></li>
          <li><a href="<?php echo base_url();?>kendaraan">Kendaraan</a></li>
          <li><a href="<?php echo base_url();?>ordercheck">Cek Pemesanan</a></li>

				</ul>
				<ul class="float">
          <li><a href="<?php echo base_url();?>aboutUs">About Us</a></li>
          <li><a href="<?php echo base_url();?>kontak">Contact Us</a></li>
				</ul>

			</div>

			<div class="col-md-2 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
				<h3>Follow Us</h3>
				<ul class="fh5co-social">
					<li><a href="#"><i class="icon-twitter"></i></a></li>
					<li><a href="#"><i class="icon-facebook"></i></a></li>
					<li><a href="#"><i class="icon-google-plus"></i></a></li>
					<li><a href="#"><i class="icon-instagram"></i></a></li>
				</ul>
			</div>


			<div class="col-md-12 fh5co-copyright text-center">
				<p>&copy; 2018 by <a href="http://darmawan-agung.com/" target="_blank">Rental Edi</a>. All Rights Reserved.</p>
			</div>

		</div>
	</footer>
