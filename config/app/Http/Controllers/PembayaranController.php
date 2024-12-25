<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\Penghuni;
use Illuminate\Support\Facades\DB;

class PembayaranController extends Controller
{
    // Menampilkan laporan pemasukan bulanan
    public function laporanPemasukan()
    {
        $laporanPemasukan = DB::table('pembayaran')
            ->join('kamar', 'pembayaran.id_kamar', '=', 'kamar.id')
            ->where('pembayaran.status', 'lunas')
            ->select(
                'pembayaran.bulan',
                DB::raw('SUM(kamar.harga) as total_pendapatan')
            )
            ->groupBy('pembayaran.bulan')
            ->orderBy('pembayaran.bulan', 'asc')
            ->get();

        return view('pembayaran.laporan', compact('laporanPemasukan'));
    }

    // Menampilkan daftar pembayaran
    public function index()
    {
        $dataPembayaran = Pembayaran::all();
        return view('pembayaran.index', compact('dataPembayaran'));
    }

    public function data(Request $request)
    {
        $bulan = $request->bulan;
        $tahun = $request->tahun;

        // Pastikan bulan dan tahun terisi
        if (!$bulan || !$tahun) {
            return redirect()->back()->with('error', 'Bulan dan Tahun harus dipilih.');
        }

        $bulan_tahun = $bulan . ' ' . $tahun;

        // Ambil data pembayaran berdasarkan bulan dan tahun
        $data = Pembayaran::where('bulan', $bulan_tahun)->get();

        if ($data->isEmpty()) {
            return redirect()->back()->with('error', 'Tidak ada data tagihan untuk bulan dan tahun ini.');
        }

        return view('pembayaran.data', ['pembayaran' => $data])->with('success', 'Data Tagihan Berhasil Dibuat');
    }

    // Menampilkan form untuk membuat pembayaran baru
    public function create()
    {
        $penghunis = Penghuni::all();
        $kamars = Kamar::all(); // Asumsikan model Kamar sudah ada
        return view('pembayaran.create', compact('penghunis', 'kamars'));
    }

    // Menyimpan data pembayaran baru
    public function store(Request $request)
    {
        $request->validate([
            'id_penghuni' => 'required',
            'id_kamar' => 'required|exists:kamar,id',
            'bulan' => 'required',
            'status' => 'required',
        ]);

        $data = new Pembayaran();
        $data->id_penghuni = $request->id_penghuni;
        $data->id_kamar = $request->id_kamar;
        $data->bulan = $request->bulan;
        $data->status = $request->status;
        $data->save();

        return redirect('/beranda/pembayaran')->with('success', 'Pembayaran berhasil ditambahkan.');
    }

    // Mengupdate status pembayaran
    public function update(Request $request, $id_pembayaran)
    {
        $data = Pembayaran::find($id_pembayaran);
        $data->status = 'lunas';
        $data->update();

        // Redirect ke halaman pembayaran.data dengan flash message
        return redirect('/data-pembayaran')->with('success', 'Status berhasil diubah.');
    }
}
