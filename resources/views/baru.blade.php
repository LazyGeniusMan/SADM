@extends('adminlte::page')

@section('title', 'Buat Permintaan Pembayaran Baru')

@section('content_header')
    <h1>Buat Permintaan Pembayaran Baru</h1>
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
                <input type="Text" id="inputDecs" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">Nilai Transaksi</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Rp</span>
                    </div>
                    <input type="text" id="inputName" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label for="inputStatus">Pihak</label>
                <select class="form-control custom-select" onchange="displayInput(this.value)" id="pihak">
                  <option value="internal" selected >Internal</option>
                  <option value="eksternal">Eksternal</option>
                </select>
              </div>
              <div class="form-group" id="eksternalInput">
                <label for="inputID">ID Vendor/Supplier</label>
                <input type="text" id="inputID" class="form-control">
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
                <input type="text" id="inputEstimatedBudget" class="form-control tagin" data-separator=" " data-transform="input => input.toUpperCase()">
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
        </div>
      </div>
    <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Batalkan</a>
          <input type="submit" value="Buat Baru" class="btn btn-success float-right">
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