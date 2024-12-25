<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KostController extends Controller
{
    //
    
    public function index(){
        return view('beranda');
    }

    public function kamar(){
        return view('kamar');
    }

    public function sewa(){
        return view('sewa');
    }

    public function fasilitas(){
        return view('fasilitas');
    }

    public function data_penyewa(){
        return view('data_penyewa');
    }

    public function about(){
        return view('about');
    }

    public function pembayaran(){
        return view('pembayaran.index');
    }

    public function laporan(){
        return view('pembayaran.laporan');
    }
}
