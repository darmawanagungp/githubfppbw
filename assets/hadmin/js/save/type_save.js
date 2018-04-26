// menyimpan data tipe mobil
$('#inputForm').on('submit', function(){

	$.ajax({

		url:bu+'admin/type/type_save',
		type:'POST',
		data:new FormData(this),
		contentType:false,
		processData:false,
		success:function(data)
		{
			alert(data);
		}

	});

	return false;

});

// menyimpan data tipe mobil
$('#editForm').on('submit', function(){

	$.ajax({

		url:bu+'admin/type/save_type_edit',
		type:'POST',
		data:new FormData(this),
		contentType:false,
		processData:false,
		success:function(data)
		{
			alert(data);
		}

	});

	return false;

});
