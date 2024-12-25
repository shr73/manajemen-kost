<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penghuni;
use App\Models\Kamar;
use App\Models\Gedung;


class PenghuniController extends Controller
{
    public function index()
    {
        $dataPenghuni = Penghuni::with('kamar')->get();
        return view('penghuni.index', compact('dataPenghuni'));
    }

    public function create()
    {
        $kamar_kost = Kamar::all();
        return view('penghuni.create', compact('kamar_kost'));
    }

    public function store(Request $request)
    {    
        try {
            $penghuni = new Penghuni;
            $penghuni->nama_penghuni = $request->nama_penghuni;
            $penghuni->nik = $request->nik;
            $penghuni->alamat = $request->alamat;
            $penghuni->id_kamar = $request->id_kamar;
            $penghuni->save();
            return redirect()->route('penghuni.index')->with('success', 'Data penghuni berhasil ditambahkan.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
    }
    
    public function edit($id)
    {
        $penghuni = Penghuni::find($id);
        $kamar_list = Kamar::all();
        return view('penghuni.update', ['penghuni' => $penghuni, 'kamar_kost' => $kamar_list]);
    }

    public function update(Request $request, $id_penghuni)
{
    $request->validate([
        'nama_penghuni' => 'required|string|max:255',
        'nik' => 'required|numeric|digits:16',
        'alamat' => 'required|string',
        'id_kamar' => 'required|exists:kamar,id',
    ]);

    try {
        $penghuni = Penghuni::where('id_penghuni', $id_penghuni)->first(); // Menggunakan id_penghuni
        $penghuni->nama_penghuni = $request->nama_penghuni;
        $penghuni->nik = $request->nik;
        $penghuni->alamat = $request->alamat;
        $penghuni->id_kamar = $request->id_kamar;
        $penghuni->save(); // Menggunakan save() untuk menyimpan perubahan

        return redirect()->route('penghuni.index')->with('success', 'Data penghuni berhasil diperbarui.');
    } catch (\Exception $e) {
        return redirect()->back()->withErrors(['error' => 'Terjadi kesalahan: ' . $e->getMessage()]);
    }
}



    public function destroy($id_penghuni)
    {
        $data = Penghuni::where('id_penghuni', $id_penghuni)->first();
        $data->delete();
        return redirect()->route('penghuni.index')->with('success', 'Data Penghuni Berhasil Dihapus');
    }
}
