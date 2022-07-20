@extends('admin.layout')

@section('content')

<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Post</h1>
    </div>
  </section>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>Advanced Table</h4>
          <div class="card-header-form">
            <a href="{{ url('admin/post/create') }}"><button class="btn btn-primary"><i class="fa fa-plus"> Tambah</i></button></a>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped" width="100%" id="tablePost">
              <thead>
                <tr>
                  <th>No. </th>
                  <th>Judul</th>
                  <th>Slug</th>
                  <th>Kategori</th>
                  <th>Tanggal</th>
                  <th>Deskripsi</th>
                  <th>Konten</th>
                  <th class="text-center" style="width: 20%;">Aksi</th>
                </tr>
              </thead>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- <div class="modal fade" tabindex="-1" role="dialog" id="modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="title">Tambah Kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Nama Kategori</label>
          <div class="input-group">
            <input type="text" class="form-control" name="name" id="name">
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
</div> --}}
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
  $('#tablePost').DataTable({
    serverside: true,
    responsive: true,
    destroy: true,
    ajax: {
      url: "{{ route('post.index') }}"
    },
    columns: [{
      "data":null,"sortable":false,
      render:function (data, type, row, meta) { 
        return meta.row + meta.settings._iDisplayStart + 1
       }
    },
    {data: 'title', name: 'title'},
    {data: 'slug', name: 'slug'},
    {data: 'category.name', name: 'category.name'},
    {data: 'date', name: 'date'},
    {data: 'description', name: 'description'},
    {data: 'content', name: 'content'},
    {data: 'aksi', name: 'aksi'},
  ],
  
  });
}
</script>
<script>
$(document).on('click','.hapus', function () {
        let id = $(this).attr('id');
        Swal.fire({
            title: 'Hapus Data ?',
            text: "Data akan dihapus dari sistem",
            showCancelButton: true,
            confirmButtonText: 'Ya',
            cancelButtonText: 'Batal',
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                // var data = new FormData();
                // data.append('id', id);
                $.ajax({
                    url: "{{ url('admin/post/delete')}}"+'/'+id,
                    type: "POST",
                    data: {
                      id: id, _token : "{{csrf_token()}}"
                    },
                    error: function(e) {
                        console.log(e);
                        toastr.error('gagal, terjadi kesalahan', {
                            timeOut: 1000,
                            fadeOut: 1000
                        });
                    },
                    success: function(data) {
                        if (data.status == 'success') {
                            toastr.success(data.msg, {
                                timeOut: 1000,
                                fadeOut: 1000
                            });
                            $('#tablePost').DataTable().ajax.reload();
                        }
                    },
                });
            } else {
                return false;
            }
        })
})
</script>

@stop