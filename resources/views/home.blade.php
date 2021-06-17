@extends('adminlte::page')

@section('title', 'Beranda')

@section('content_header')
    <h1>Beranda</h1>
@stop

@section('content')
<div class="row">
        <div class="col-12">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-primary">
                <h3 class="widget-user-username">{{ Auth::user()->name }}</h3>
                <h5 class="widget-user-desc">{{ Auth::user()->jabatan }}</h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle elevation-2" src="/img/{{ Auth::user()->foto }}" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-6 border-right">
                    <div class="description-block">
                      <h5 class="description-header">{{ Auth::user()->last_login }}</h5>
                      <span class="description-text">Terakhir Login</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-6 border-right">
                    <div class="description-block">
                      <h5 class="description-header">{{ Auth::user()->ip_adress }}</h5>
                      <span class="description-text">Alamat IP</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
        </div>
    </div>
@stop

@section('css')

@stop

@section('js')

@stop