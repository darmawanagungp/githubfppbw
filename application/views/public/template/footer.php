<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.footer {
   position: relative;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #2f2e52;
   color: white;
   text-align: center;
}
</style>
</head>
<body>
<div class="footer">
	<div class="footer-wrapper">

		<div class="pay-wrapper" style="text-align: center;">
			<h4>Kami Menerima Pembayaran Melalui</h4>
			<br>
			<div class="pay-content">

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
		<br>
	</div>
	<div class="footer-border"></div>

	<div class="footer-wrapper">
		<span style="text-align: center; display: block;">Copyright @ 2018. All right reserved</span>
	</div>
</div>

</body>
</html>
