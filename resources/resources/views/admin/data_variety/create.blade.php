@extends('admin.layout')

@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Data Varietas</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="{{ url('admin/dashboard') }}">Admin</a></div>
          <div class="breadcrumb-item"><a href="{{ url('admin/data_variety') }}">Data</a></div>
          <div class="breadcrumb-item">Create</div>
        </div>
      </div>

      <div class="section-body">
        <h2 class="section-title">Tambah Data</h2>

        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>Form Data</h4>
                </div>
                <div class="card-body">
                    <form id="form_data" enctype="multipart/form-data" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <fieldset class="form-group">
                                    <label for="judul">Judul <small class="text-danger">*</small></label>
                                    <input name="title" type="text" id="judul" class="form-control" placeholder="Masukkan judul berita">
                                    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                                    <p><small id="error_judul" class="text-danger"></small></p>
                                </fieldset>
                            </div>
                            {{-- <div class="col-md-6"></div> --}}
                            <div class="col-md-6">
                                <fieldset class="form-group">
                                    <label for="tanggal">Kategori <small class="text-danger">*</small></label>
                                    <select class="form-control" id="variety" name="variety">
                                    <option>Pilih Jenis</option>
                                    @foreach ($variety as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                    {{-- <p><small id="error_kategori" class="text-danger"></small></p> --}}
                                </select>
                                @error('variety')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                </fieldset>
                            </div>
                            <div class="col-md-6"></div>
                            <div class="col-md-6"></div>
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="konten">Konten <small class="text-danger">*</small></label>
                                    <textarea class="form-control" id="konten"></textarea>
                                    <p><small id="error_konten" class="text-danger"></small></p>
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" id="tombol_simpan"  class="btn glow btn-primary float-right"><i class="bx bx-save"></i> Simpan</button>
                                <button type="button" id="tombol_reload" class="btn glow btn-danger float-right mr-2"><i class="bx bx-sync"></i> Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="{{ asset('admin/assets/js/pickers/pickadate/picker.js') }}"></script>
   <script src="{{ asset('admin/assets/js/pickers/pickadate/picker.date.js') }}"></script>
  <script src="{{ asset('admin/assets/js/pickers/pickadate/picker.time.js') }}"></script>
  <script src="{{ asset('admin/assets/js/pickers/pickadate/legacy.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
 
<script>
    var base_url = "{{ url('') }}";
    var img = "{{ asset('admin/assets/img/default.jpg') }}";
  $(document).ready(function() {
    CKEDITOR.replace('konten', {
        filebrowserUploadUrl: "{{ route('data_content_upload', ['_token' => csrf_token() ]) }}",
        filebrowserUploadMethod: 'form'
    });
});
$('.pickadate').pickadate({
    selectYears: true,
    format: 'dd-mm-yyyy',
});
$('#thumbnail').change(function(e) {
    if (this.files && this.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#remove_thumbnail').show();
            $('#tmp_thumbnail').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
    }
});

$('#remove_thumbnail').on('click', function() {
    $('#thumbnail').val('');
    $('#remove_thumbnail').hide();
    $('#tmp_thumbnail').attr('src', img);
});
$('#tombol_reload').on('click', function() {
    $("html, body").animate({
        scrollTop: 0
    }, "slow");
    setTimeout(() => {
        location.reload();
    }, 800);
});

</script>
<script>
$('#form_data').on('submit', function(e) {
    e.preventDefault();
    var konten = CKEDITOR.instances['konten'].getData();
    var data = new FormData(this);
    console.log(konten);
    data.append('content', konten);
    console.log(Array.from(data));
    $.ajax({
        type: "POST",
        url: '{{ url("admin/data_variety/store") }}',
        data: data,
        dataType: "JSON",
        processData: false,
        contentType: false,
        beforeSend: function() {
            $('#tombol_simpan').text("Proses...");
            $('#tombol_simpan').prop('disabled', true);
        },
        complete: function() {
            $('#tombol_simpan').prop('disabled', false);
            $('#tombol_simpan').html('<i class="fa fa-save"></i> Simpan');
            $("html, body").animate({
                scrollTop: 0
            }, "slow");
        },
        error: function() {
            $('#tombol_simpan').prop('disabled', false);
            $('#tombol_simpan').html('<i class="fa fa-save"></i> Simpan');
            toastr.error('Gagal, terjadi kesalahan', {
                timeOut: 1000,
                fadeOut: 1000
            });
            $('#error_judul').html('');
            $('#error_konten').html('');
        },
        success: function(response) {
            if (response.status == 'success') {
                console.log(konten);
                $('#form_data').trigger("reset");
                // $('#remove_thumbnail').hide();
                // $('#tmp_thumbnail').attr('src', img);
                CKEDITOR.instances['konten'].setData('');
                toastr.success(response.msg, {
                    timeOut: 2000,
                    fadeOut: 2000
                });
                $('#error_judul').html('');
                $('#error_konten').html('');
            } else {
                toastr.error('Mohon Periksa inputan', {
                    timeOut: 2000,
                    fadeOut: 2000
                });
                $('#error_judul').html(response.msg.judul);
                $('#error_konten').html(response.msg.konten);
            }
        }
    });
});
</script>
@stop