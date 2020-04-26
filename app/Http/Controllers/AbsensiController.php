<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index(Request $request)
    {
    	if($request->has('cari')){
    		$data_absensi = \App\Absensi::where('waktu','LIKE','%'.$request->cari.'%')->get();
    	}else{
    		$data_absensi = \App\Absensi::all();
    	}
    	
    	return view('absensi.index',['data_absensi' => $data_absensi]);
    }

     public function create(Request $request)
    {
    	\App\Absensi::create($request->all());
    	return redirect('/absensi')->with('sukses','Absen selesai!'); 
    }

     public function edit($id)
    {
    	$absensi = \App\Absensi::find($id);
    	return view('absensi/edit',['absensi' => $absensi]);
    }
      public function update(Request $request,$id)
    {
    	$absensi = \App\Absensi::find($id);
    	$absensi->update($request->all());
    	return redirect('/absensi')->with('sukses','Absen diperbaharui!'); 
    }
      public function delete(Request $request,$id)
    {
    	$absensi = \App\Absensi::find($id);
    	$absensi->delete($absensi);
    	return redirect('/absensi')->with('sukses','Absen Dihapus!'); 
    }

}
