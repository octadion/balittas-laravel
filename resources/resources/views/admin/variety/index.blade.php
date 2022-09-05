@extends('admin.layout')

@section('content')

<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Variety</h1>
    </div>
  </section>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>Advanced Table</h4>
          <div class="card-header-form">
            <button class="btn btn-primary" id="btnadd" data-toggle="modal" data-target="#modal"><i class="fa fa-plus"> Tambah</i></button>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-stripped" width="100%" id="tableVariety">
              <thead>
                <tr>
                  <th>No. </th>
                  <th>Variety</th>
                  <th>Slug</th>
                  <th class="text-center" style="width: 20%;">Aksi</th>
                </tr>
              </thead>
            </table>
            <p class="small font-weight-bold">* Data variety adalah data jenis dari post pada website Balittas</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="title">Tambah</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Nama Variety</label>
          <div class="input-group">
            <input type="text" class="form-control" name="name" id="name">
            {{-- <input type="hidden" class="form-control" name="slug" id="slug"> --}}
            <input type="hidden" class="form-control" name="id" id="id">
          </div>
        </div>
      </div>
      <div class="modal-footer bg-whitesmoke br">
        <button type="button" class="btn btn-secondary" id="close" data-dismiss="modal">Close</button>
        <button type="button" id="save" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
  $(document).ready(function(){
    table()
    $('#modal').on('hidden.bs.modal', function () {
        $('.modal').find('text,input,button').val('');
        $('#save').text('Save')
});
})
function table() {
  $('#tableVariety').DataTable({
    serverside: true,
    responsive: true,
    destroy: true,
    ajax: {
      url: "{{ route('variety.index') }}"
    },
    columns: [{
      "data":null,"sortable":false,
      render:function (data, type, row, meta) { 
        return meta.row + meta.settings._iDisplayStart + 1
       }
    },
    {data: 'name', name: 'name'},
    {data: 'slug', name: 'slug'},
    {data: 'aksi', name: 'aksi'},
  ]
  });
}
</script>
<script>
$('#save').on('click',function () {
  if ($(this).text() === 'Update') {
     update()
  } else {
    store()
  }
})
function store(){
  var name = $('#name').val();
  $.ajax({
    url: '{{ url("admin/variety/store") }}',
    data: {name:name, _token: '{{csrf_token()}}'},
    type: 'post',
    success:function(res){
      console.log(res);
      toastr.success(res.text, 
      {
        timeOut: 1000,
        fadeOut: 1000
      });
      $('#close').click();
      $('#tableVariety').DataTable().ajax.reload();
      $('#name').val(null);
    },
    error:function(xhr){
      alert(xhr.responJson.text);
    }
  });
}
//cari update slug, ubah kondisi jadi page value

$(document).on('click','.edit', function(){
  let id = $(this).attr('id');
  $('#btnadd').click();
  $('#save').text('Update');
  $('#title').text('Update Variety');
  $.ajax({
    url: '{{ url("admin/variety/showUpdate") }}',
    data: {id:id, _token: '{{csrf_token()}}'},
    type: 'post',
    success:function(res){
      console.log(res);
      $('#id').val(res.data.id);
      $('#name').val(res.data.name);
      $('#slug').val(res.data.slug);
    },
  });
});
function update() {
  $.ajax({
    url : "{{ url('admin/variety/update')}}",
    type : "post",
    data : {
    id : $('#id').val(),
    name : $('#name').val(),
    _token: "{{csrf_token()}}"
    },
    success : function (res) {
      console.log(res);
      toastr.success(res.text, 
      {
        timeOut: 1000,
        fadeOut: 1000
      });
      $('#close').click()
      $('#tableVariety').DataTable().ajax.reload()
      $('#name').val(null)
      // $('#telp').val(null)
      // $('#alamat').val(null)
      $('#save').text('Save')
        },
        error : function (xhr) {
            alert(xhr.responJson.text)
        }
    }) 
    }
    $(document).on('click','.hapus', function () {
        let id = $(this).attr('id')
        Swal.fire({
            title: 'Hapus Data ?',
            text: "Data akan dihapus dari sistem",
            showCancelButton: true,
            confirmButtonText: 'Ya',
            cancelButtonText: 'Batal',
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
        $.ajax({
            url : "{{ url('admin/variety/delete')}}",
            type : 'post',
            data: {
                id: id,
                "_token" : "{{csrf_token()}}"
            },
            success: function (params) {
              toastr.success(params.text, 
              {
                timeOut: 1000,
                fadeOut: 1000
              });
                $('#tableVariety').DataTable().ajax.reload()
            }
        });
      } else {
                return false;
            }
        })
    })

</script>

@stop