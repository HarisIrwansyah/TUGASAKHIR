@extends('Tiket.Dalam.master')
@section('content')
  <form class="form-horizontal" action="{{ Route('insert') }}" method="post">
    <fieldset>
      @csrf
      <h3>Daftar Club yang Bertanding</h3>
       <ol>
          <li>Barito vs Semen Padang</li>
          <li>Martapura vs Madura United</li>
          <li>Persiban Banjarmasin vs Banyu Wangi</li>
      </ol>
      <h3>Kelas dan Harga Tiket</h3>
      <ul>
          <li>EKONOMI : Rp  35.000</li>
          <li>VIP     : Rp  50.000</li>
          <li>VVIP    : Rp 100.000</li>
      </ul>
      <br><br>
      <div class="form-group">
        <label class="col-md-2 control-label" for="Nama_Club">Nama Club yang Bertanding</label>
        <div class="col-md-6">
          <input name="Nama_Club" type="text" placeholder="Nama_Club" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label" for="Nama_Pemesan">Nama Pemesan</label>
        <div class="col-md-6">
          <input name="Nama_Pemesan" type="text" placeholder="Nama Pemesan" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label" for="Jumlah Tiket">Jumlah Pemesanan Tiket</label>
        <div class="col-md-6">
          <input name="Jumlah_Tiket" type="number" placeholder="0" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label" for="Kelas Tiket">Kelas Tiket</label>
        <div class="col-md-6">
              <input name="Kelas_Tiket" type="text" placeholder="HURUF KAPITAL" class="form-control">
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-8 text-right">
            <button type="submit" class="btn btn-success">Simpan</button>
          </div>
        </div>

      </fieldset>


      </form>
    @endsection