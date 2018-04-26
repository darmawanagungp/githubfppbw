$(document).on('click', '#edit', function(){

  var id = $(this).attr('idcontent');

  $.get(bu+'admin/mobil/mobil_delete/'+id, function(data){
    alert(data);
  });

});
