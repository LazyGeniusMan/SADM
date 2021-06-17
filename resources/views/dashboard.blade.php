@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
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
    <div class="row">
        <div class="col-md-8">
            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Permintaan Pembayaran Terakhir</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>Timestamp</th>
                      <th>Pemohon</th>
                      <th>Keterangan</th>
                      <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if (Gate::Allows('pemohon', Auth::user()))
                    <tr>
                      <td><a href="{{ url('pembayaran/permintaan-pembayaran') }}">PR7075</a></td>
                      <td>2021-04-27 14:50:10</td>
                      <td>Susanti</td>
                      <td>Biaya Perjalanan</td>
                      <td><span class="badge badge-warning">Belum Diperiksa</span></td>
                    </tr>
                    <tr>
                      <td><a href="{{ url('pembayaran/permintaan-pembayaran') }}">PR6976</a></td>
                      <td>2021-04-27 11:20:18</td>
                      <td>Susanti</td>
                      <td>5 Buah Printer</td>
                      <td><span class="badge badge-warning">Belum Diperiksa</span></td>
                    </tr>
                    <tr>
                      <td><a href="{{ url('pembayaran/permintaan-pembayaran') }}">PR6691</a></td>
                      <td>2021-03-03 09:10:30</td>
                      <td>Susanti</td>
                      <td>Biaya Perjalanan</td>
                      <td><span class="badge badge-info">Dibayar</span></td>
                    </tr>
                    <tr>
                      <td><a href="{{ url('pembayaran/permintaan-pembayaran') }}">PR6342</a></td>
                      <td>2021-02-05 15:20:50</td>
                      <td>Susanti</td>
                      <td>Biaya Perjalanan</td>
                      <td><span class="badge badge-info">Dibayar</span></td>
                    </tr>
                    <tr>
                      <td><a href="{{ url('pembayaran/permintaan-pembayaran') }}">PR5942</a></td>
                      <td>2021-11-12 16:10:40</td>
                      <td>Susanti</td>
                      <td>Biaya Perjalanan</td>
                      <td><span class="badge badge-info">Dibayar</span></td>
                    </tr>
                    @elseif (Gate::Allows('pemeriksa', Auth::user()))
                    <tr>
                      <td><a href="{{ url('pembayaran/permintaan-pembayaran') }}">PR7075</a></td>
                      <td>2021-04-27 14:50:10</td>
                      <td>Susanti</td>
                      <td>Biaya Perjalanan</td>
                      <td><span class="badge badge-warning">Belum Diperiksa</span></td>
                    </tr>
                    <tr>
                      <td><a href="{{ url('pembayaran/permintaan-pembayaran') }}">PR6976</a></td>
                      <td>2021-04-27 11:20:18</td>
                      <td>PT Bahagia Makmur</td>
                      <td>5 Buah Printer</td>
                      <td><span class="badge badge-warning">Belum Diperiksa</span></td>
                    </tr>
                    <tr>
                      <td><a href="{{ url('pembayaran/permintaan-pembayaran') }}">PR6888</a></td>
                      <td>2021-04-26 09:10:30</td>
                      <td>PT Suka Senang</td>
                      <td>10 Buah Kursi Kantor</td>
                      <td><span class="badge badge-warning">Belum Diperiksa</span></td>
                    </tr>
                    <tr>
                      <td><a href="{{ url('pembayaran/permintaan-pembayaran') }}">PR6870</a></td>
                      <td>2021-04-23 15:20:50</td>
                      <td>PT Besi Baja</td>
                      <td>10 Buah Meja Kantor</td>
                      <td><span class="badge badge-success">Ditetujui</span></td>
                    </tr>
                    <tr>
                      <td><a href="{{ url('pembayaran/permintaan-pembayaran') }}">PR6855</a></td>
                      <td>2021-04-23 16:10:40</td>
                      <td>Wawan</td>
                      <td>Biaya Perjalanan</td>
                      <td><span class="badge badge-success">Disetujui</span></td>
                    </tr>
                    @else
                    <p>Anda belum login, silahkan <a href="./login">login disini</a>.</p>
                    @endif
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <a href="{{ url('pembayaran/baru') }}" class="btn btn-sm btn-info float-left">Buat Baru</a>
                <a href="{{ url('pembayaran/list') }}" class="btn btn-sm btn-secondary float-right">Lihat Semua</a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </div>
        <div class="col-md-4">
            @if (Gate::Allows('pemohon', Auth::user()))
            <div class="info-box mb-3 bg-warning">
              <span class="info-box-icon"><i class="fas fa-spinner"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Belum Diperiksa</span>
                <span class="info-box-number">2</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 bg-success">
              <span class="info-box-icon"><i class="fas fa-check"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Disetujui</span>
                <span class="info-box-number">0</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 bg-danger">
              <span class="info-box-icon"><i class="fas fa-times"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Ditolak</span>
                <span class="info-box-number">0</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 bg-info">
              <span class="info-box-icon"><i class="fas fa-money-check-alt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Dibayar</span>
                <span class="info-box-number">52</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            @elseif (Gate::Allows('pemeriksa', Auth::user()))
            <div class="info-box mb-3 bg-warning">
              <span class="info-box-icon"><i class="fas fa-spinner"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Belum Diperiksa</span>
                <span class="info-box-number">3</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 bg-success">
              <span class="info-box-icon"><i class="fas fa-check"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Disetujui</span>
                <span class="info-box-number">14</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 bg-danger">
              <span class="info-box-icon"><i class="fas fa-times"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Ditolak</span>
                <span class="info-box-number">2</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 bg-info">
              <span class="info-box-icon"><i class="fas fa-money-check-alt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Dibayar</span>
                <span class="info-box-number">624</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            @else
            <p>Anda belum login, silahkan <a href="./login">login disini</a>.</p>
            @endif
        </div>
    </div>
@stop

@section('css')

@stop

@section('js')

@stop