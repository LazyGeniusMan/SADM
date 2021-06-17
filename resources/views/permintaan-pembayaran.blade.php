@extends('adminlte::page')

@section('title', 'Permintaan Pembayaran')

@section('content_header')
    <h1>Permintaan Pembayaran</h1>
@stop

@section('content')
    <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Rincian</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
              <div class="row">
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">ID</span>
                      <span class="info-box-number text-center text-muted mb-0">PR6976</span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Nilai Transaksi</span>
                      <span class="info-box-number text-center text-muted mb-0">Rp5.150.000</span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Status</span>
                      <span class="info-box-number text-center text-muted mb-0">Belum Diperiksa<span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <h4>Aktivitas Terbaru</h4>
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="/img/user1-128x128.jpg" alt="user image">
                        <span class="username">
                          <a href="#">Susanti</a>
                        </span>
                        <span class="description">2021-04-27 14:50:10</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Merubah ID Vendor/Supplier.
                      </p>
                    </div>

                    <div class="post clearfix">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="/img/user1-128x128.jpg" alt="User Image">
                        <span class="username">
                          <a href="#">Susanti</a>
                        </span>
                        <span class="description">2021-04-27 14:30:10</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Mengajukan Permintaan Pembayaran.
                      </p>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
              <div class="text-muted">
                <p class="text-sm">Keterangan
                  <b class="d-block">5 Buah Printer</b>
                </p>
                <p class="text-sm">Pemohon
                  <b class="d-block">Susanti</b>
                </p>
                <p class="text-sm">Vendor/Supplier
                  <b class="d-block">PT Bahagia Makmur</b>
                </p>
              </div>

              <h5 class="mt-5 text-muted">Lampiran</h5>
              <ul class="list-unstyled">
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Functional-requirements.docx</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i> UAT.pdf</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-envelope"></i> Email-from-flatbal.mln</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-image "></i> Logo.png</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Contract-10_12_2014.docx</a>
                </li>
              </ul>
              @can('pemohon', Auth::user())
              <div class="text-center mt-5 mb-3">
                <a href="{{ url('pembayaran/ubah') }}" class="btn btn-sm btn-primary">Ubah</a>
              </div>
              @endcan
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="callout callout-info">
              <h5>Dokumen Pendukung</h5>
            </div>


            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i> PT Bahagia Makmur
                    <small class="float-right">Date: 23/04/2021</small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  From
                  <address>
                    <strong>PT Bahagia Makmur</strong><br>
                    Jalan Merdeka No.45<br>
                    Bandung, 40144<br>
                    Phone: (62) 22-12542<br>
                    Email: contact@bahagia-makmur.com
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  To
                  <address>
                    <strong>PT NICI</strong><br>
                    Jalan Asia Afrika No.43<br>
                    Jakarta, 14110<br>
                    Phone: (62) 21-642342<br>
                    Email: contact@nici.id
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <b>Invoice #IN4324</b><br>
                  <br>
                  <b>Order ID:</b> PO43256<br>
                  <b>Payment Due:</b> 06/05/2021<br>
                  <b>Account:</b> 968-34567
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Qty</th>
                      <th>Product</th>
                      <th>Serial #</th>
                      <th>Description</th>
                      <th>Subtotal</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>HP DeskJet Plus Ink Advantage 6475</td>
                      <td>455-981-221</td>
                      <td>All-in-One Printer</td>
                      <td>Rp1.700.000</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>HP Deskjet Ink Advantage 2135</td>
                      <td>247-925-726</td>
                      <td>Printer</td>
                      <td>Rp2.800.000</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                </div>
                <!-- /.col -->
                <div class="col-6">
                  <p class="lead">Amount Due 06/05/2021</p>

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">Subtotal:</th>
                        <td>Rp4.500.000</td>
                      </tr>
                      <tr>
                        <th>Tax (10%)</th>
                        <td>Rp450.000</td>
                      </tr>
                      <tr>
                        <th>Shipping:</th>
                        <td>Rp200.000</td>
                      </tr>
                      <tr>
                        <th>Total:</th>
                        <td>Rp5.150.000</td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <a href="#" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                  <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate PDF
                  </button>
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <div class="row">
        <div class="col-12">
            @can('pemeriksa', Auth::user())
              <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Pemeriksaan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                    <div class="form-group">
                        <label for="inputDescription">Komentar</label>
                        <textarea id="inputDescription" class="form-control" rows="4"></textarea>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-danger">Tolak</button>
                  <button type="submit" class="btn btn-success float-right">Setujui</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            @endcan
        </div>
    </div>
@stop

@section('css')
    
@stop

@section('js')
    
@stop