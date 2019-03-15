$(function () {
  $('#data').DataTable()
  $('#example2').DataTable({
    'paging'      : true,
    'lengthChange': false,
    'searching'   : false,
    'ordering'    : true,
    'info'        : true,
    'autoWidth'   : false
  })
  //Date picker
  $('#datepicker').datepicker({
    autoclose: true
  })

  //foto click
  $("#avatar").click(function(){
    $("#file").click();
  })

  //ketika file input change
  $("#file").change(function(){
    setImage(this,"#avatar");
  })
})
//Read Image
function setImage(input,target){
  if(input.files && input.files[0]){
    var reader = new FileReader();

    //mengganti src dari object img#avatar
    reader.onload =function(e){
      $(target).attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]);
  }
}
//Add Buku
function add_buku(no_induk,judul){
  var no = $(".buku-item").length+1;
  var content ='<tr class="buku-item '+no_induk+'">';
  content += '<td>'+no+'</td>';
  content += '<td>'+no_induk+'</td>';
  content += '<td>'+judul+'</td>';
  content += '<td>';
  content += '<button type="button" class="btn btn-flat btn-xs btn-danger" no-induk ="'+no_induk+'" onclick="remove_buku(this)">X</button>';
  content += '<input type="hidden" value="'+no_induk+'" name="nobuku[]">';
  content += '<input type="hidden" value="'+judul+'" name="judul[]">';
  content += '</td>';
  content += '</tr>';


  $("#IsBuku").append(content);
}
function remove_buku(obj){
  var cls = $(obj).attr("no-induk");
  $("."+cls).remove();
}
function pesan(pos,tp,judul,waktu){
  Swal.fire({
    position: pos+'-end',
    type: tp,
    title: judul,
    showConfirmButton: false,
    timer: waktu
  });
}