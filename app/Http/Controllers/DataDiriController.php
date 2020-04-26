<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataDiriController extends Controller
{
    public function index(Request $request)
    {
    		$data_datadiri = \App\DataDiri::all();
    	
    	
    	return view('datadiri.index',['data_datadiri' => $data_datadiri]);
    }

     public function create(Request $request)
    {
    	\App\DataDiri::create($request->all());
    	return redirect('/datadiri')->with('sukses','Absen selesai!'); 
    }

     public function edit($nis)
    {
    	$datadiri = \App\DataDiri::find($nis);
    	return view('datadiri/edit',['users' => $datadiri]);
    }
      public function update(Request $request,$nis)
    {
    	$datadiri = \App\DataDiri::find($nis);
    	$datadiri->update($request->all());
    	return redirect('/datadiri')->with('sukses','Absen diperbaharui!'); 
    }
      public function delete(Request $request,$nis)
    {
    	$datadiri = \App\DataDiri::find($nis);
    	$datadiri->delete($datadiri);
    	return redirect('/datadiri')->with('sukses','Absen Dihapus!'); 
    }

}