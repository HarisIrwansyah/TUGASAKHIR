@extends('Tiket.Dalam.master')
@section('content')
 
  <table class="table table-bordered table-responsive">
    <thead>
      <tr>
        <th>Nama Club</th>
        <th>Nama Pemesan</th>
        <th>Banyak Tiket di Pesan</th>
        <th>Kelas Tiket</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

      @foreach ($result as $datatiket)
        {{--expr--}}
        <tr>
          <td>{{$datatiket->Nama_Club}}</td>
          <td>{{$datatiket->Nama_Pemesan}}</td>
          <td>{{$datatiket->Jumlah_Tiket}}</td>
          <td>{{$datatiket->Kelas_Tiket}}</td>
          <td>
            <a href="{{ Route('delete', ['id' => $datatiket->id]) }}" class="btn btn-danger btn-xs" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</a>
            <a href="{{ Route('edit', ['id' => $datatiket->id]) }}" class="btn btn-info btn-xs">Edit</a>
          </td>
        </tr>

      @endforeach
    </tbody>
  </table>
@endsection
