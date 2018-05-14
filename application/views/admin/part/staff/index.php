
<button class="btn btn-default cnw">Tambah Data Staff</button>

<div class="datalist">

	<table data-toggle="table"
       data-url="<?php echo base_url();?>admin/staff/mobil_data"
       data-pagination="true"
       data-side-pagination="server"
       data-page-list="[5, 10, 20, 50, 100, 200]"
       data-search="true"

       data-show-refresh="true"
       data-show-toggle="true"
       data-show-columns="true"
       >
    <thead>
        <tr>
            <th data-field="nama_staff">Nama Staff</th>
            <th data-field="gaji_staff">Gaji Staff</th>
            <th data-field="dob_staff">Tanggal Lahir</th>
						<th data-field="jabatan_staff">Jabatan</th>
            <th data-field="action">Aksi</th>
        </tr>
    </thead>
</table>

</div>

<script src="<?php echo base_url();?>assets/hadmin/js/hotel/staff.js" type="text/javascript"></script>

<script type="text/javascript">
$(document).on('click', '#edit', function(){

  var id = $(this).attr('idcontent');

  $('#jqContent').load(bu+'admin/staff/mobil_edit/'+id);
  $('#jqContent').slideDown('400');

});

$(document).on('click', '#delete', function(){

  var id = $(this).attr('idcontent');

  $.get(bu+'admin/staff/mobil_delete/'+id, function(data){
    //alert(data);
		window.location.replace("http://localhost/pbwfp/githubfppbw/admin/staff");
  });

});
</script>
