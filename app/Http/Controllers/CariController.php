<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Cari;
use App\Models\Penghuni;

class CariController extends Controller
{
    //
    public function index(){
        $dataCari = Cari::all(); 
        //dd($dataCari);
        return view('cari.index', ['dataCari' => $dataCari]); 
    }    
    public function lihat(){
        $penghuni = Penghuni::all();
        return view('cari.index', compact('penghuni'));
    }
    // public function data(Request $request){
    //     // Validasi input pengguna
    //     $request->validate([
    //         'id_penghuni' => 'required|integer',
    //     ]);

    //     // Tangkap input pencarian
    //     $hasil = $request->input('id_penghuni');

    //     // Query menggunakan relasi untuk mencari berdasarkan nama penghuni


    //     $data = Cari::query('cari_data')
    //         ->join('penghuni', 'cari_data.id_penghuni', '=', 'penghuni.id_penghuni')
    //         ->join('kamar', 'penghuni.id_kamar', '=', 'kamar.id')
    //         ->join('pembayaran', 'cari_data.id_pembayaran', '=', 'pembayaran.id_pembayaran')
    //         ->select(
    //             'cari_data.id',
    //             'penghuni.nama_penghuni',
    //             'cari_data.id_penghuni',
    //             'kamar.nama_kamar',
    //             'cari_data.id_pembayaran',
    //             'pembayaran.status'
    //         )
    //         ->get();
        


    //     // Periksa apakah data ditemukan
    //     if (empty($hasil)) {
    //         return response()->json([
    //             'message' => 'Data tidak ditemukan untuk nama penghuni tersebut.',
    //         ], 404);
    //     }

    //     // Kembalikan data hasil pencarian
    //     return response()->json([
    //         'message' => 'Data ditemukan.',
    //         'data' => $hasil,
    //     ]);
    // }

}