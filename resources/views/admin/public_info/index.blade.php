@extends('admin.layout')

@section('content')

<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Informasi Publik</h1>
    </div>
  </section>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>List Data Informasi Publik</h4>
          <div class="card-header-form">
            <a href="{{ url('admin/public_info/create') }}"><button class="btn btn-primary"><i class="fa fa-plus"> Tambah</i></button></a>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped" width="100%" id="tableInfo">
              <thead>
                <tr>
                  <th>No. </th>
                  <th>Nama</th>
                  <th>Slug</th>
                  {{-- <th>Konten</th> --}}
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
  $('#tableInfo').DataTable({
    serverside: true,
    responsive: true,
    destroy: true,
    ajax: {
      url: "{{ route('public_info.index') }}"
    },
    columns: [{
      "data":null,"sortable":false,
      render:function (data, type, row, meta) { 
        return meta.row + meta.settings._iDisplayStart + 1
       }
    },
    {data: 'title', name: 'title'},
    {data: 'slug', name: 'slug'},
    // {data: 'content', name: 'content'},
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
                    url: "{{ url('admin/public_info/delete')}}"+'/'+id,
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
                            $('#tableInfo').DataTable().ajax.reload();
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