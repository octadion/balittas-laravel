@extends('admin.layout')

@section('content')

<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>User</h1>
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
            <table class="table table-stripped" width="100%" id="tableUser">
              <thead>
                <tr>
                  <th>No. </th>
                  <th>Name</th>
                  <th>E-Mail</th>
                  <th>Role</th>
                  <th class="text-center" style="width: 20%;">Aksi</th>
                </tr>
              </thead>
            </table>
            <p class="small font-weight-bold">* Data user adalah data akun pada website Balittas</p>
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
        <h5 class="modal-title" id="title">Tambah Pegawai</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Username</label>
          <div class="input-group">
            <input type="text" class="form-control" name="name" id="name">
            {{-- <input type="hidden" class="form-control" name="slug" id="slug"> --}}
            <input type="hidden" class="form-control" name="id" id="id">
          </div>
        </div>
        <div class="form-group">
          <label>Nama Depan</label>
          <div class="input-group">
            <input type="text" class="form-control" name="first_name" id="first_name">
            {{-- <input type="hidden" class="form-control" name="slug" id="slug"> --}}
            {{-- <input type="hidden" class="form-control" name="id" id="id"> --}}
          </div>
        </div>
        <div class="form-group">
          <label>Nama Belakang</label>
          <div class="input-group">
            <input type="text" class="form-control" name="last_name" id="last_name">
            {{-- <input type="hidden" class="form-control" name="slug" id="slug"> --}}
            {{-- <input type="hidden" class="form-control" name="id" id="id"> --}}
          </div>
        </div>
        <div class="form-group">
          <label>No. Telp</label>
          <div class="input-group">
            <input type="number" class="form-control" name="phone" id="phone">
            {{-- <input type="hidden" class="form-control" name="slug" id="slug"> --}}
            {{-- <input type="hidden" class="form-control" name="id" id="id"> --}}
          </div>
        </div>
        <div class="form-group">
            <label>E-Mail</label>
            <div class="input-group">
              <input type="text" class="form-control" name="email" id="email">
              {{-- <input type="hidden" class="form-control" name="slug" id="slug"> --}}
              <input type="hidden" class="form-control" name="role_id" id="role_id" value="3">
            </div>
          </div>
          <div class="form-group">
            <label>Deskripsi</label>
            <div class="input-group">
              <input type="text" class="form-control" name="desc" id="desc">
              {{-- <input type="hidden" class="form-control" name="slug" id="slug"> --}}
              {{-- <input type="hidden" class="form-control" name="role_id" id="role_id" value="3"> --}}
            </div>
          </div>
          <div class="form-group">
            <label>Password</label>
            <div class="input-group">
              <input type="password" class="form-control" name="password" id="password">
              {{-- <input type="hidden" class="form-control" name="slug" id="slug"> --}}
             
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
<div class="modal fade" tabindex="-1" role="dialog" id="modal-detail">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="title">Detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body table-responsive">
        <table class="table table-bordered no-margin">
            <tbody>
                <tr>
                    <th style="width: 35%">Userame</th>
                    <td><span id="name2"></span></td>
                </tr>
                <tr>
                  <th>Nama Depan</th>
                  <td><span id="fname2"></span></td>
              </tr>
              <tr>
                <th>Nama Belakang</th>
                <td><span id="lname2"></span></td>
            </tr>
                <tr>
                    <th>Email</th>
                    <td><span id="email2"></span></td>
                </tr>
                <tr>
                    <th>No Telp</th>
                    <td><span id="phone2"></span></td>
                </tr>
                {{-- <tr>
                  <th>Deskripsi</th>
                  <td><span id="desk"></span></td>
              </tr> --}}
                {{-- <tr>
                    <th>Desc</th>
                    <td><span id="desc"></span></td>
                </tr> --}}
            </tbody>
        </table>
    </div>
      <div class="modal-footer bg-whitesmoke br">
        <button type="button" class="btn btn-secondary" id="close" data-dismiss="modal">Close</button>
        {{-- <button type="button" id="save" class="btn btn-primary">Save</button> --}}
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
    showdetail()
    $('#modal').on('hidden.bs.modal', function () {
        $('.modal').find('text,input,button').val('');
        $('#save').text('Save')
});

})
function table() {
  $('#tableUser').DataTable({
    serverside: true,
    responsive: true,
    destroy: true,
    ajax: {
      url: "{{ route('user.index') }}"
    },
    columns: [{
      "data":null,"sortable":false,
      render:function (data, type, row, meta) { 
        return meta.row + meta.settings._iDisplayStart + 1
       }
    },
    {data: 'name', name: 'name'},
    {data: 'email', name: 'email'},
    {data: 'roles.name', name: 'roles.name'},
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
  var first_name = $('#first_name').val();
  var last_name = $('#last_name').val();
  var phone = $('#phone').val();
  var email = $('#email').val();
  var desc = $('#desc').val();
  var role_id = $('#role_id').val();
  console.log(role_id);
  var password = $('#password').val();
  $.ajax({
    url: '{{ url("admin/user/store") }}',
    data: {name:name, first_name:first_name, last_name:last_name, desc:desc,phone:phone,email:email, role_id:role_id, password:password, _token: '{{csrf_token()}}'},
    type: 'post',
    success:function(res){
      console.log(res);
      toastr.success(res.text, 
      {
        timeOut: 1000,
        fadeOut: 1000
      });
      $('#close').click();
      $('#tableUser').DataTable().ajax.reload();
      $('#name').val(null);
    },
    error:function(xhr){
      alert(xhr.responJson.text);
    }
  });
}
//cari update slug, ubah kondisi jadi page value
function showdetail() {  
$(document).on('click','.detail', function(){
  var name = $(this).data('name');
  var phone = $(this).data('phone');
  var email = $(this).data('email');
  // var desc = $(this).data('desc');
  var fname = $(this).data('first_name');
  var lname = $(this).data('last_name');
  console.log(fname);
  $('#name2').text(name);
  $('#phone2').text(phone);
  $('#email2').text(email);
  $('#fname2').text(fname);
  $('#lname2').text(lname);
  // $('#desc').text(htmldesc);
      
});
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
            url : "{{ url('admin/user/delete')}}",
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
                $('#tableUser').DataTable().ajax.reload()
            }
        });
      } else {
                return false;
            }
        })
    })

</script>

@stop