<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
  
    	
     public function index(Request $request)
    {
    	if($request->has('cari')){
    		$data_kegiatan = \App\Laporan::where('waktu','LIKE','%'.$request->cari.'%')->get();
    	}else{
    		$data_kegiatan = \App\Laporan::all();
    	}
    	
    	return view('laporan.index',['data_kegiatan' => $data_kegiatan]);
    }
    
}
