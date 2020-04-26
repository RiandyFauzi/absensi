<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index(Request $request)
    {
    	if($request->has('cari')){
    		$data_kegiatan = \App\Kegiatan::where('waktu','LIKE','%'.$request->cari.'%')->get();
    	}else{
    		$data_kegiatan = \App\Kegiatan::all();
    	}
    	
    	return view('kegiatan.index',['data_kegiatan' => $data_kegiatan]);
    }

     public function create(Request $request)
    {
    	\App\Kegiatan::create($request->all());
    	return redirect('/kegiatan')->with('sukses','Absen selesai!'); 
    }

     public function edit($id)
    {
    	$kegiatan = \App\Kegiatan::find($id);
    	return view('kegiatan/edit',['kegiatan' => $kegiatan]);
    }
      public function update(Request $request,$id)
    {
    	$kegiatan = \App\Kegiatan::find($id);
    	$kegiatan->update($request->all());
    	return redirect('/kegiatan')->with('sukses','Absen diperbaharui!'); 
    }
      public function delete(Request $request,$id)
    {
    	$kegiatan = \App\Kegiatan::find($id);
    	$kegiatan->delete($kegiatan);
    	return redirect('/kegiatan')->with('sukses','Absen Dihapus!'); 
    }
     public function form()
    {
    	return view('form.form');
    }







    

}
