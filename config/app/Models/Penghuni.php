<?php

namespace App\Models;
use App\Models\Kamar;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penghuni extends Model
{
    use HasFactory;

    protected $table = 'penghuni';
    protected $primaryKey = 'id_penghuni';

    protected $fillable = [
        'id_penghuni',
        'nama_penghuni',
        'nik',
        'alamat',
        'id_kamar'
    ];
    public function kamar(){
        return $this->belongsTo(kamar::class, 'id_kamar');

    }
}