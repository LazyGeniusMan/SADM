@extends('adminlte::page')

@section('title', 'List Permintaan Pembayaran')

@section('content_header')
    <h1>List Permintaan Pembayaran</h1>
@stop

@section('content')
    <div id="row">
        <div id="col-12">
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">List Permintaan Pembayaran</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
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
                    @for ($i = 5942; $i > 5900; $i--)
                    <tr>
                      <td><a href="{{ url('pembayaran/permintaan-pembayaran') }}">PR{{ $i }}</a></td>
                      <td>2021-11-12 16:10:40</td>
                      <td>Susanti</td>
                      <td>Biaya Perjalanan</td>
                      <td><span class="badge badge-info">Dibayar</span></td>
                    </tr>
                        @endfor
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
                    @for ($i = 6869; $i > 6700; $i--)
                    <tr>
                      <td><a href="{{ url('pembayaran/permintaan-pembayaran') }}">PR{{ $i}}</a></td>
                      <td>2021-04-23 16:10:40</td>
                      <td>Wawan</td>
                      <td>Biaya Perjalanan</td>
                      <td><span class="badge badge-success">Disetujui</span></td>
                    </tr>
                    @endfor
                    @else
                        <p>Anda belum login, silahkan <a href="./login">login disini</a>.</p>
                    @endif
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
    </div>
@stop

@section('css')

@stop

@section('js')
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
      "ordering": false,
    });
  });
</script>
@stop