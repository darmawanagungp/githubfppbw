<!DOCTYPE html>
<html>
<head>
	<title>
			<?php
			// memanggil judul web
				echo title_web().' | '.slogan_web();
		   	?>
	</title>


	<script src="//code.jquery.com/jquery.js"></script>

	<!-- css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/hpublic/css/style3.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/hpublic/css/style.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Karla|Work+Sans" rel="stylesheet">

	<!-- js -->

	<script src="<?php echo base_url();?>assets/hadmin/js/jquery-3.2.1.js" type="text/javascript"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
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

	<script type="text/javascript" src="<?php echo base_url();?>assets/hpublic/js/helper.js"></script>

	</script>

</head>
<body>
	<div id="loader-wrapper" style="visibility:hidden;">
		<h2>Loading...</h2>
		<div id="loader"></div>
		<div class="loader-section section-left"></div>
		<div class="loader-section section-right"></div>
	</div>

<div id="jqContent">
	<script src="<?php echo base_url();?>assets/hpublic/js/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/hpublic/js/main.js" type="text/javascript"></script>
</div>
</div>
<script type="text/javascript">
	(function() {
    var visited = localStorage.getItem('visited');
    if (!visited) {
        document.getElementById("loader-wrapper").style.visibility = "visible";
        localStorage.setItem('visited', true);
    }
	})();
</script>
