<style type="text/css">

    .navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus {
    color: #000; /*Sets the text hover color on navbar*/
	}

	.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active >
	        a:hover, .navbar-default .navbar-nav > .active > a:focus {
	    color: white; /*BACKGROUND color for active*/
	    background-color: #386da5;
	}

	.navbar-default {
		font-family: karla;

	    background-color: #4b9ce2;
	    border-color: #4b9ce2;
	}
	.navbar-default .navbar-brand{
		font-family: Roboto;
		color: yellow;
	}
	.dropdown-menu > li > a:hover,
	.dropdown-menu > li > a:focus {
	    color: #262626;
	    text-decoration: none;
	    background-color: #66CCFF; /*change color of links in drop down here*/
	}

	.nav > li > a:hover,
	.nav > li > a:focus {
	    text-decoration: none;
	    background-color: silver; /*Change rollover cell color here*/
	}

	.navbar-default .navbar-nav > li > a {
	    color: yellow; /*Change active text color here*/
	}
  </style>

<div id="menu-head-wrapper" href="<?php echo base_url();?>">

	<a href="<?php echo base_url();?>">
		<div class="logo" style="color: yellow;" href="<?php echo base_url();?>">
			<?php echo title_web();?>
		</div>
	</a>

	<div class="menu">

		<nav>
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
		      </button>
		    </div>
		    <div class="collapse navbar-collapse" id="myNavbar">
		      <ul class="nav navbar-nav">
		        <li class="active"><a href="<?php echo base_url();?>home">Home</a></li>
		        <li><a href="<?php echo base_url();?>kendaraan">Kendaraan</a></li>
		        <li><a href="<?php echo base_url();?>ordercheck">Cek Pemesanan</a></li>
						<li><a href="<?php echo base_url();?>aboutUs">About Us</a></li>
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
