<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kamar;
use App\Models\Gedung;
class KamarController extends Controller
{
    //
    public function index(){
        $data = Kamar::with('gedung')->get();
        return view('kamar.index', ['dataKamar' => $data]);
    }
    public function create(){
        $gedung_kost = Gedung::all();
        return view('kamar.create', compact('gedung_kost'));
        #return redirect()->route('beranda')->route('kamar.create');

    }
    public function store(Request $request){
        $data = new Kamar;
        $data->nama_kamar = $request->nama_kamar;
        $data->fasilitas = $request->fasilitas;
        $data->id_gedung = $request->id_gedung;
        $data->save();
        return redirect()->route('kamar.index')->with('success', 'Data Berhasil Ditambahkan');
    }
    public function edit($id){
        $data = Kamar::find($id);
        $gedung = Gedung::all();
        return view('kamar.update', ['data' => $data, 'gedung' => $gedung]);
    }
    public function update(Request $request, $id){
        $data = Kamar::find($id);
        $data->id = $request->id;
        $data->nama_kamar = $request->nama_kamar;
        $data->fasilitas = $request->fasilitas;
        $data->id_gedung = $request->id_gedung;
        $data->update();
        return redirect()->route('kamar.index')->with('success', 'Data Berhasil Diupdate');
    }
    public function destroy($id){
        $data = Kamar::find($id);
        $data->delete();
        return redirect()->route('kamar.index')->with('success', 'Data Berhasil Dihapus');
    }
}
