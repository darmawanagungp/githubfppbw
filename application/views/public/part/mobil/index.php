<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
<div class="container"  style="text-align: center;" >
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
	<div class='card' style='width: 105%;'>
	<img class='card-img-top' src='<?php echo base_url().'assets/hpublic/img_hotel/'.$rhotel->image_vh;?>' alt='Card image cap'>
	<div class='card-body'>
		<h5 class='card-title'><?php echo 'Rp. '.rpCurrency($rhotel->price_vh).'/hari';?></h5>
		<p class='card-text'><?php echo $rhotel->name_vh;?></p>
		<p class='card-text'><?php echo $rhotel->name_cat;?></p>
		<a href='<?php echo base_url().'kendaraan/'.$rhotel->slug_vh;?>' class='btn btn-primary'>Book Now</a>
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

	<form class="" style="display: inline-block;" action="kendaraan" method="post">
		<input style="display: none;" type="text" name="i" value=<?php echo $i-6; ?>>
		<input style="display: none;" type="text" name="j" value=<?php echo $j-6; ?>>
		<button class="btn btn-primary" type="submit" name="" value="">prev</button>
	</form>

	<form class="" style="display: <?php echo $d; ?>" action="kendaraan" method="post">
		<input style="display: none;" type="text" name="i" value=<?php echo $i+6; ?>>
		<input style="display: none;" type="text" name="j" value=<?php echo $j+6; ?>>
		<button class="btn btn-primary" type="submit" name="" value="">next</button>

	</form>

</div>
<br></br>
</div>
