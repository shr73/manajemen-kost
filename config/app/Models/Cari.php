<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cari extends Model
{
    //
    protected $table='cari_data';
    protected $primaryKey = 'id';
    protected $fillable = ['nama_penghuni','id_penghuni', 'nama_kamar','id_pembayaran', 'status'];

    public function pembayaran(){
        return $this->belongsTo(Pembayaran::class, 'id_pembayaran','status');
    }
    public function kamar(){
        return $this->belongsTo(Kamar::class, 'id');
    }
    public function penghuni(){
        return $this->belongsTo(Penghuni::class, 'id_penghuni');
    }
}