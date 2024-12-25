<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class gedung extends Model
{
    //
    protected $table = 'gedung_kost';
    protected $primaryKey = 'id_gedung';
    protected $fillable = ['id_gedung', 'nama_gedung'];

    public function kamar(){
        return $this->hasMany(kamar::class);
    }
}
