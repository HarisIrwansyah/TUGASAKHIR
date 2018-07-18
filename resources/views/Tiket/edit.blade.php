@extends('Tiket.Dalam.master')
@section('content')
  <form class="form-horizontal" action="{{ Route('submitedit', ['id' => $tiket->id]) }}" method="post">
    <fieldset>
      @csrf
       <div class="form-group">
        <label class="col-md-2 control-label" for="Nama_Club">Nama Club yang Bertanding</label>
        <div class="col-md-6">
        <input name="Nama_Club" type="text" placeholder="Nama_Club" class="form-control" value="{{ $tiket->Nama_Club}}">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label" for="Nama_Pemesan">Nama Pemesan</label>
        <div class="col-md-6">
          <input name="Nama_Pemesan" type="text" placeholder="Nama_Pemesan" class="form-control" value="{{$tiket->Nama_Pemesan}}">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label" for="Jumlah_Tiket">Jumlah Pemesanan Tiket</label>
        <div class="col-md-6">
          <input name="Jumlah_Tiket" type="number" placeholder="0" class="form-control" value="{{$tiket->Jumlah_Tiket}}">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label" for="Kelas_Tiket">Kelas Tiket</label>
        <div class="col-md-6">
          <input name="Kelas_Tiket" type="text" placeholder="Kelas_Tiket" class="form-control" value="{{ $tiket->Kelas_Tiket}}">
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

{{-- @extends('master')
@section('content')

<form action="">
<label for="">ID Barang</label>
<input type="text" placeholder="id barang...">
<br><br>

<label for="">Nama Barang</label>
<input type="text" placeholder="nama barang...">
<br><br>

<label for="">Jumlah</label>
<input type="number">
<br><br>
<button>Simpan</button>
<br><br>
</form>
@endsection
--}}
