@extends('admin.layout')

@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Profile</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item">Profile</div>
        </div>
      </div>
      <div class="section-body">
        <h2 class="section-title">Hi, {{ $user->name }}!</h2>
        <p class="section-lead">
          Change information about yourself on this page.
        </p>

        <div class="row mt-sm-4">
          <div class="col-12 col-md-12 col-lg-5">
            <div class="card profile-widget">
              <div class="profile-widget-header">
                <img alt="image" src="{{ asset('upload/profile/photo/'.$user->profile_photo_path) }}" class="rounded-circle profile-widget-picture" width="250">
                <div class="profile-widget-items">
                  <div class="profile-widget-item">
                    <div class="profile-widget-item-label">Posts</div>
                    <div class="profile-widget-item-value">{{ $post }}</div>
                  </div>
                  <div class="profile-widget-item">
                    <div class="profile-widget-item-label">Followers</div>
                    <div class="profile-widget-item-value">6,8K</div>
                  </div>
                  <div class="profile-widget-item">
                    <div class="profile-widget-item-label">Following</div>
                    <div class="profile-widget-item-value">2,1K</div>
                  </div>
                </div>
              </div>
              <div class="profile-widget-description">
                <div class="profile-widget-name">{{ $user->name }} <div class="text-muted d-inline font-weight-normal"><div class="slash"></div> @foreach ($role as $row)
                @if ($row->id == $user->role_id)
                  {{$row->name}}
                @endif
                @endforeach</div></div>
                {!! $user->desc !!}
               </div>
             
            </div>
          </div>
          <div class="col-12 col-md-12 col-lg-7">
            <div class="card">
              <form id="form_data" method="post" class="needs-validation" novalidate="">
                <div class="card-header">
                  <h4>Edit Profile</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                      <div class="form-group col-md-6 col-12">
                        <label>First Name</label>
                        <input type="text" class="form-control" name="first_name" value="{{ old('first_name') ? old('first_name') : $user->first_name }}" >
                        <div class="invalid-feedback">
                          Please fill in the first name
                        </div>
                      </div>
                      <div class="form-group col-md-6 col-12">
                        <label>Last Name</label>
                        <input type="text" class="form-control" name="last_name" value="{{ old('last_name') ? old('last_name') : $user->last_name }}">
                        <div class="invalid-feedback">
                          Please fill in the last name
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-7 col-12">
                        <label>Email</label>
                        <input type="email" disabled class="form-control" name="email" value="{{ old('email') ? old('email') : $user->email }}">
                        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                        <div class="invalid-feedback">
                          Please fill in the email
                        </div>
                      </div>
                      <div class="form-group col-md-5 col-12">
                        <label>Phone</label>
                        <input type="tel" class="form-control" name="phone" value="{{ old('phone') ? old('phone') : $user->phone }}">
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-12">
                        <label>Bio</label>
                        <textarea class="form-control summernote-simple" name="desc">{{ old('desc') ? old('desc') : $user->desc }}</textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="image">Foto Profile <small class="text-danger">*</small></label>
                      <input name="image" type="file" accept=".jpg,.png,.jpeg,.gif" class="form-control image">
                      <p><small class="text-danger error_image"></small></p>
                  </div>
                  
                </div>
                <div class="card-footer text-right">
                  <button type="submit" id="tombol_simpan" class="btn btn-primary">Save Changes</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="{{ asset('admin/assets/js/pickers/pickadate/legacy.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <script>
    $(document).ready(function() {
});
  </script>
  <script>
    $('#form_data').on('submit', function(e) {
    e.preventDefault();
    // var konten = CKEDITOR.instances['konten'].getData();
    var data = new FormData(this);
    console.log(Array.from(data));
    $.ajax({
        type: "POST",
        url: '{{ url("admin/user/update/".$user->id) }}',
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
            // $('#error_judul').html('');
            // $('#error_tanggal').html('');
            // $('#error_thumbnail').html('');
            // $('#error_keterangan').html('');
            // $('#error_konten').html('');
        },
        success: function(response) {
            if (response.status == 'success') {
                
                $('#form_data').trigger("reset");
                toastr.success(response.msg, {
                    timeOut: 2000,
                    fadeOut: 2000
                });
                // $('#error_judul').html('');
                // $('#error_tanggal').html('');
                // $('#error_thumbnail').html('');
                // $('#error_keterangan').html('');
                // $('#error_konten').html('');
            } else {
                toastr.error('Mohon Periksa inputan', {
                    timeOut: 2000,
                    fadeOut: 2000
                });
             
            }
        }
    });
});
</script>
@stop