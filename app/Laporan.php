<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
     protected $table = 'absensi'; 
    protected $fillable = ['waktu','kegiatan','mapel','bukti'];

     
}
