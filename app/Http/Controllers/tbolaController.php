<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tbola;
class tbolaController extends Controller
{
   public function index()
    {
    	return view ('Index');
    }

    public function show(){
		$tbolas = Tbola::all();
		return view('Tiket.show', ['tiket' => $tbolas]);
	}

	public function create(){
		return view('Tiket.create');
	}

	public function insert(Request $request){
		$tiket = new Tbola;
		$tiket->Nama_Club = $request->Nama_Club;
		$tiket->Nama_Pemesan = $request->Nama_Pemesan;
		$tiket->Jumlah_Tiket = $request->Jumlah_Tiket;
		$tiket->Kelas_Tiket = $request->Kelas_Tiket;
		$tiket->save();

		return redirect(Route('show'))->with('alert-success','Data Telah Ditambahkan !!');
		// return redirect()->route('index');
		// return redirect()->action('BarangController@index');
		// return Redirect::action('BarangController@index');
	}

	public function delete($id){
		$tiket = Tbola::findOrFail($id);
		// dd($barang);
		$tiket->delete();
		return redirect(Route('show'))->with('success','Berhasil Dihapus...');
	}

	public function edit($id){
		$tiket = Tbola::findOrFail($id);
		return view('Tiket.edit', ['tiket' => $tiket]);
	}

	public function submitedit(Request $request, $id){
		$tiket = Tbola::findOrFail($id);

		$tiket->Nama_Club = $request->Nama_Club;
		$tiket->Nama_Pemesan = $request->Nama_Pemesan;
		$tiket->Jumlah_Tiket = $request->Jumlah_Tiket;
		$tiket->Kelas_Tiket = $request->Kelas_Tiket;
		$tiket->save();

		return redirect(Route('show'))->with('alert-success','Data Berhasil Dirubah !!');

	}

	public function search(Request $request){
		$search = $request->get('cari');
		$result = Tbola::where('Nama_Pemesan', 'LIKE', '%'.$search.'%')->paginate(10);
		return view('Tiket.result', compact('search', 'result'));
}
}