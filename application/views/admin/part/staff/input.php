<style type="text/css">

.gs-ipt-wrapper
{
    width: 40%;
    margin: auto;
    margin-top: 3%;
    margin-bottom: 20px;
}

</style>

<div class="close-jqContent">
	X
</div>

<div class="gs-ipt-wrapper">

<label class="ipt-title">Input Data Staff</label>

<form id="inputForm" action="staff/mobil_save" method="post">
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-tags"></i></span>
    <input id="hotel" type="text" class="form-control" name="nama" placeholder="Nama Staff" required="">
  </div>
  <br>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-tags"></i></span>
    <input id="hotel" type="text" class="form-control" name="jabatan" placeholder="Jabatan Staff" required="">
  </div>
  <br>
  <div id="textf"></div>
  <input type="date" name="dob" value="">
  <br>
  <br>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-yen"></i></span>
    <input id="price" type="number" class="form-control" name="gaji" placeholder="Gaji Staff" required="">
  </div>
  <br>

  <br>

  <button type="submit" class="btn btn-primary" style="width: 100%;">Simpan Kendaraan</button>
</form>


</div>

<script src="<?php echo base_url();?>assets/hadmin/js/close.js" type="text/javascript"></script>
<!-- <script src="<?php // echo base_url();?>assets/hadmin/js/save/hotel_save.js" type="text/javascript"></script> -->

<script type="text/javascript">

// $(document).ready(function() {
//   $('#texte').summernote();
//
//   var string = 'Jabatan';
//   $('#texte').summernote('code', string);
// });

$('.fd-content').on('click', function(){

    var checkbox = $(this).find("input[type='checkbox']");

    if( checkbox.attr("checked") == "" ){
        checkbox.attr("checked","true");
    } else {
        checkbox.attr("checked","");
    }
  $(this).toggleClass('active');

});

</script>
