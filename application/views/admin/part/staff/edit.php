<style type="text/css">

.gs-ipt-wrapper
{
    width: 40%;
    margin: auto;
    margin-top: 3%;
    margin-bottom: 20px;
}

</style>

<?php foreach($staff_data as $bd){}?>

<div class="close-jqContent">
	X
</div>

<div class="gs-ipt-wrapper">

<label class="ipt-title">Edit Data Staff</label>

<form id="editForm" action="staff/mobil_save_edit" method="post">
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-tags"></i></span>
    <input id="idmobil" type="hidden" name="id_staff" value="<?php echo $bd->id_staff;?>">
    <input id="hotel" type="text" class="form-control" name="nama" value="<?php echo $bd->nama_staff;?>" placeholder="Nama Staff" required="">
  </div>
  <br>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-tags"></i></span>
    <input id="hotel" type="text" class="form-control" name="jabatan" placeholder="Jabatan Staff" required="" value="<?php echo $bd->jabatan_staff;?>">
  </div>
  <br>
  <input  type="date" name="dob" value="<?php echo $bd->dob_staff;?>">
  <br>
  <br>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-yen"></i></span>
    <input id="price" type="number" class="form-control" name="gaji" value="<?php echo $bd->gaji_staff;?>" placeholder="Gaji Staff" required="">
  </div>

  <div class="left">
  </div>
  <br>
  <br>

  <button type="submit" class="btn btn-primary" style="width: 100%;">Simpan Data Staff</button>
</form>


</div>

<script src="<?php echo base_url();?>assets/hadmin/js/close.js" type="text/javascript"></script>
<!-- <script src="<?php// echo base_url();?>assets/hadmin/js/save/hotel_save.js" type="text/javascript"></script> -->

<script type="text/javascript">

// $(document).ready(function() {
//   $('#texte').summernote();
//
//   var string = '<?php echo $bd->jabatan_staff;?>';
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
