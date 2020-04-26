<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = 'absensi'; 
    protected $fillable = ['waktu','kegiatan','mapel','kegiatan2','gambar'];
}
