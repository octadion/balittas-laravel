@extends('admin.layout')

@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Detail</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Post</a></div>
          <div class="breadcrumb-item">Detail</div>
        </div>
      </div>

      <div class="section-body">
        <h2 class="section-title">Detail Post</h2>
        <p class="section-lead">
          Detail halaman post
        </p>

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4>Detail</h4>
              </div>
              <div class="card-body">
          
                <div class="tickets">
                  <div class="ticket-items" id="ticket-items">
                    <img src="/upload/post/thumbnail/{{ $post->thumbnail }}" width="250">
                  </div>
                  <div class="ticket-content">
                    <div class="ticket-header">
                      <div class="ticket-sender-picture img-shadow">
                        <img alt="image" src="{{ asset('admin/assets/img/avatar/avatar-1.png') }}">
                      </div>
                      <div class="ticket-detail">
                        <div class="ticket-title">
                          <h4>{{ $post->title }}</h4>
                        </div>
                        <div class="ticket-info">
                          <div class="font-weight-600">@foreach ($user as $row)
                            @if ($row->id == $post->user_id)
                              {{$row->name}}
                            @endif
                            @endforeach</div>
                          <div class="bullet"></div>
                          <div class="text-primary font-weight-600">{{ \Carbon\Carbon::parse($post->date)->format('j F, Y') }}</div>
                        </div>
                      </div>
                    </div>
                    <div class="ticket-description">
                      {!! $post->content !!}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  @stop