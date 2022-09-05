@extends('admin.layout')

@section('content')

<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Galeri</h1>
    </div>
  </section>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>Tabel Galeri</h4>
          <div class="card-header-form">
            <button class="btn btn-primary" id="btnadd" data-toggle="modal" data-target="#modal_tambah"><i class="fa fa-plus"> Tambah</i></button>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-stripped" width="100%" id="tableGaleri">
              <thead>
                <tr>
                  <th>No. </th>
                  <th>Judul</th>
                  <th>Gambar</th>
                  <th class="text-center" style="width: 20%;">Aksi</th>
                </tr>
              </thead>
            </table>
            <p class="small font-weight-bold">* Data galeri adalah data gambar pada website Balittas</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="modal_tambah" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Galeri</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <form class="form_data" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" class="form-control judul" name="title">
                                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                                <p><small class="text-danger error_judul"></small></p>
                            </div>
                            <div class="form-group">
                                <label for="image">Gambar <small class="text-danger">*</small></label>
                                <input name="image" type="file" accept=".jpg,.png,.jpeg,.gif" class="form-control image">
                                <p><small class="text-danger error_image"></small></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary tombol_simpan"><i class="bx bx-save"></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="modal_ubah" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Perbarui Galeri</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <form class="form_data" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" id="title" class="form-control judul" name="title">
                                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                                <input type="hidden" class="form-control" name="id" id="id">
                                <p><small class="text-danger error_judul"></small></p>
                            </div>
                            <div class="form-group">
                                <label for="image">Gambar <small class="text-danger">*</small></label>
                                <input name="image" type="file" accept=".jpg,.png,.jpeg,.gif" class="form-control image">
                                <p><small class="text-danger error_image"></small></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary tombol_simpan"><i class="bx bx-save"></i> Simpan</button>
                </div>
            </form>
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
  $('#tableGaleri').DataTable({
    serverside: true,
    responsive: true,
    destroy: true,
    ajax: {
      url: "{!! route('galeri.index') !!}"
    },
    columns: [{
      "data":null,"sortable":false,
      render:function (data, type, row, meta) { 
        return meta.row + meta.settings._iDisplayStart + 1
       }
    },
    {data: 'title', name: 'title'},
    {data: 'image', name: 'image',
        render: function( data, type, full, meta ) {
                return "<img src=\"/upload/galeri/content/"+data+"\" height=\"50\"/>";
            }
    },
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
$('#modal_tambah .form_data').on('submit', function(e) {
            e.preventDefault();
            var data = new FormData(this);
            $.ajax({
                type: "POST",
                url: '{{ url("admin/galeri/store") }}',
                data: data,
                dataType: "JSON",
                processData: false,
                contentType: false,
                beforeSend: function() {
                    $('#modal_tambah .tombol_simpan').text("Proses...");
                    $('#modal_tambah .tombol_simpan').prop('disabled', true);
                },
                complete: function() {
                    $('#modal_tambah .tombol_simpan').prop('disabled', false);
                    $('#modal_tambah .tombol_simpan').html('<i class="bx bx-save"></i> Simpan');
                },
                error: function() {
                    $('#modal_tambah .tombol_simpan').prop('disabled', false);
                    $('#modal_tambah .tombol_simpan').html('<i class="bx bx-save"></i> Simpan');
                    toastr.error('Gagal, terjadi kesalahan', {
                        timeOut: 1000,
                        fadeOut: 1000
                    });
                    $('#modal_tambah .error_judul').html('');
                    $('#modal_tambah .error_image').html('');
                },
                success: function(response) {
                    if (response.status == 'success') {
                        $('#modal_tambah').modal('hide');
                        $('#tableGaleri').DataTable().ajax.reload();
                        $('#modal_tambah .form_data').trigger("reset");
                        toastr.success(response.msg, {
                            timeOut: 2000,
                            fadeOut: 2000
                        });
                        $('#modal_tambah .error_judul').html('');
                        $('#modal_tambah .error_image').html('');
                    } else {
                        toastr.error('Mohon Periksa inputan', {
                            timeOut: 2000,
                            fadeOut: 2000
                        });
                        $('#modal_tambah .error_judul').html(response.msg.judul);
                        $('#modal_tambah .error_image').html(response.msg.image);
                    }
                }
            });
        });
        $('#modal_ubah .form_data').on('submit', function(e) {
            e.preventDefault();
            var data = new FormData(this);
            $.ajax({
                type: "POST",
                url: '{{ url("admin/galeri/update") }}',
                data: data,
                dataType: "JSON",
                processData: false,
                contentType: false,
                beforeSend: function() {
                    $('#modal_ubah .tombol_simpan').text("Proses...");
                    $('#modal_ubah .tombol_simpan').prop('disabled', true);
                },
                complete: function() {
                    $('#modal_ubah .tombol_simpan').prop('disabled', false);
                    $('#modal_ubah .tombol_simpan').html('<i class="bx bx-save"></i> Simpan');
                },
                error: function() {
                    $('#modal_ubah .tombol_simpan').prop('disabled', false);
                    $('#modal_ubah .tombol_simpan').html('<i class="bx bx-save"></i> Simpan');
                    toastr.error('Gagal, terjadi kesalahan', {
                        timeOut: 1000,
                        fadeOut: 1000
                    });
                    $('#modal_ubah #error_judul').html('');
                },
                success: function(response) {
                    if (response.status == 'success') {
                        $('#modal_ubah').modal('hide');
                        $('#tableGaleri').DataTable().ajax.reload();
                        $('#modal_ubah .form_data').trigger("reset");
                        toastr.success(response.msg, {
                            timeOut: 2000,
                            fadeOut: 2000
                        });
                        $('#modal_ubah .error_judul').html('');
                    } else {
                        toastr.error('Mohon Periksa inputan', {
                            timeOut: 2000,
                            fadeOut: 2000
                        });
                        $('#modal_ubah .error_judul').html(response.msg.judul);
                    }
                }
            });
        });
//cari update slug, ubah kondisi jadi page value

$(document).on('click','.edit', function(){
  let id = $(this).attr('id');
//   $('#btnadd').click();
//   $('#save').text('Update');
//   $('#title').text('Update');
  $.ajax({
    url: '{{ url("admin/galeri/showUpdate") }}',
    data: {id:id, _token: '{{csrf_token()}}'},
    type: 'post',
    success:function(res){
      console.log(res);
      console.log(res.data.id);
      $('#id').val(res.data.id);
      $('#title').val(res.data.title);
    },
  });
});
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
            url : "{{ url('admin/galeri/delete')}}",
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
                $('#tableGaleri').DataTable().ajax.reload()
            }
        });
      } else {
                return false;
            }
        })
    })

</script>

@stop