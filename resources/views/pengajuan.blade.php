@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">PENGAJUAN EDC MANGGA DUA</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

    <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Nama Merchant</th>
      <th scope="col">Nama Penghubung</th>
      <th scope="col">Tanggal Pengajuan</th>
      <th scope="col">Jumlah EDC</th>
      <th scope="col">Status Pengajuan</th>
      <th scope="col"> Keterangan </th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">PT Maju Jiwa</th>
      <td>Rudi Andrean</td>
      <td>03 Maret 2019</td>
      <td>2</td>
      <td>Telah Diterima</td>
      <td>Merchant meminta EDC jenis baru</td>
      <td><button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#modalDetail">Detail</button>
    </tr>
    <tr>
      <th scope="row">Roka Elektronik</th>
      <td>Jacob Nurhadi</td>
      <td>19 Maret 2019</td>
      <td>1</td>
      <td>Sedang Diproses</td>
      <td>-</td>
      <td><button type="button" class="btn btn-primary">Detail</button></td>
    </tr>
    <tr>
      <th scope="row">Kontal Pte. Ltd.</th>
      <td>Larry Sam</td>
      <td>15 April 2019</td>
      <td>1</td>
      <td>Sedang Diproses</td>
      <td>Barang masih inden</td>
      <td><button type="button" class="btn btn-primary">Detail</button></td>
    </tr>
  </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modalDetail" tabindex="-1" role="dialog" aria-labelledby="modalDetailTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="modalDetailTitle">Detail</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5>Data Merchant</h5>
        <table class="table">
            <tr>
                <td>MID</td>
                <td>008217120</td>
            </tr>
            <tr>
                <td>Nama Merchant</td>
                <td>CV JAYA PERKASA</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>Jalan Beo No 19</td>
            </tr>
            <tr>
              <td>PIC Merchant</td>
              <td>Joni Armando</td>
            </tr>
            <tr>
              <td>Telepon</td>
              <td>089871272121</td>
            </tr>
        </table>
        <h5>Data Perangkat</h5>
        <table class="table">
          <tr>
            <td>Serial Number</td>
            <td>1kdew92</td>
          </tr>
          <tr>
            <td>Kanwil Implementor</td>
            <td>Jakarta Pusat</td>
          </tr>
          <tr>
            <td>Implementor</td>
            <td>PT EDC GOOD</td>
          </tr>
        </table>
        <h5>Lainnya</h5>
        <p>test</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

@endsection
