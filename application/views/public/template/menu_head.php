<div id="menu-head-wrapper" href="<?php echo base_url();?>">

	<a href="<?php echo base_url();?>">
		<div class="logo" style="color: yellow;" href="<?php echo base_url();?>">
			<?php echo title_web();?>
		</div>
	</a>

	<div class="menu">
		<!-- <nav>
		  <ul class="nav nav-tabs">
				 <li class="nav-item">
				 	<a class="nav-link active" href="<?php echo base_url();?>kendaraan">Kendaraan</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" href="<?php echo base_url();?>ordercheck">Cek Pemesanan</a>
				</li>
				<li class="nav-item">
				 <a class="nav-link active" href="<?php echo base_url();?>kontak">Contact Us</a>
			 </li>
				<?php foreach($menu as $md):?>
				<?php if(count($menu)>0):?>
				<li class="nav-item">
					<a href="<?php echo base_url().'/page/'.url_title($md->name_page, '-', TRUE);?>">
						<?php echo $md->name_page;?>
					</a>
				</li>
				<?php else:?>
				<?php endif;?>
				<?php endforeach;?>
			</ul>
		</nav> -->
		<nav>
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
						<span class="icon-bar"></span>
		      </button>
		    </div>
		    <div class="collapse navbar-collapse" id="myNavbar">
		      <ul class="nav navbar-nav">
		        <li class="active"><a href="<?php echo base_url();?>">Home</a></li>
		        <li><a href="<?php echo base_url();?>kendaraan">Kendaraan</a></li>
		        <li><a href="<?php echo base_url();?>ordercheck">Cek Pemesanan</a></li>
						<li><a href="<?php echo base_url();?>kontak">Contact Us</a></li>

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
		    </div>
		  </div>
		</nav>
	</div>
</div>
