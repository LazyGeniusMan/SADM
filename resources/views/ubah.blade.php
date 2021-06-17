@extends('adminlte::page')

@section('title', 'Ubah Permintaan Pembayaran')

@section('content_header')
    <h1>Ubah Permintaan Pembayaran</h1>
@stop

@section('content')
<div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Permintaan Pembayaran</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group" id="eksternal">
                <label for="inputDesc">Keterangan</label>
                <input type="Text" id="inputDecs" class="form-control" value="5 Buah Printer">
              </div>
              <div class="form-group">
                <label for="inputName">Nilai Transaksi</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Rp</span>
                    </div>
                    <input type="text" id="inputName" class="form-control" value="5.150.000">
                </div>
              </div>
              <div class="form-group">
                <label for="inputStatus">Pihak</label>
                <select class="form-control custom-select" onchange="displayInput(this.value)" id="pihak">
                  <option value="internal">Internal</option>
                  <option value="eksternal" selected>Eksternal</option>
                </select>
              </div>
              <div class="form-group" id="eksternalInput">
                <label for="inputID">ID Vendor/Supplier</label>
                <input type="text" id="inputID" class="form-control" value="VD015">
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Dokumen Pendukung</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputEstimatedBudget">ID Dokumen</label>
                <input type="text" id="inputEstimatedBudget" class="form-control tagin" data-separator=" " data-transform="input => input.toUpperCase()" value="IN4324">
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Lampiran</label>
                <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="exampleInputFile" multiple>
                      <label class="custom-file-label" for="exampleInputFile">Pilih Berkas</label>
                    </div>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Lampiran</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body p-0">
              <table class="table">
                <thead>
                  <tr>
                    <th>Nama File</th>
                    <th>Ukuran File</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>

                  <tr>
                    <td>Functional-requirements.docx</td>
                    <td>49.8005 kb</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                  <tr>
                    <td>UAT.pdf</td>
                    <td>28.4883 kb</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                  <tr>
                    <td>Email-from-flatbal.mln</td>
                    <td>57.9003 kb</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                  <tr>
                    <td>Logo.png</td>
                    <td>50.5190 kb</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                  <tr>
                    <td>Contract-10_12_2014.docx</td>
                    <td>44.9715 kb</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>

                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
      </div>
</div>
    <div class="row">
        <div class="col-12">
          <a href="{{ url('pembayaran/permintaan-pembayaran') }}" class="btn btn-secondary">Batalkan</a>
          <input type="submit" value="Simpan" class="btn btn-success float-right">
        </div>
    </div>
@stop

@section('css')

@stop

@section('js')
<script>
        var answer = document.getElementById('pihak').value;
        document.getElementById('eksternalInput').style.display = "none";
        function displayInput(answer) {
            if (answer == "internal") { // hide the div that is not selected
                document.getElementById('eksternalInput').style.display = "none";
            } else if (answer == "eksternal") {
                document.getElementById('eksternalInput').style.display = "block";
            }
        }
        window.onload = displayInput(answer);

        $(document).ready(function () {
            bsCustomFileInput.init()
        })

        for (const el of document.querySelectorAll('.tagin')) {
        tagin(el)
        }
    </script>
@stop