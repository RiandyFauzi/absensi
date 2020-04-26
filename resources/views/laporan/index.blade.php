@extends('layouts.master')

@section('content')
<div class="main">
<div class="main-content">
<div class="container-flud">
<div class="row">
<div class="col-md-12">
 <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Laporan</h3>
									<div class="right">
										
										
									</div>
									
								</div>
								<div class="panel-body">
									
										 <label for="exampleInputPassword1">NIS :</label>
									<a href="#"><span>{{auth()->user()->nis}}</span></a>
															</div>
                                <div class="panel-body">
									
										 <label for="exampleInputPassword1">Nama :</label>
									<a href="#"><span>{{auth()->user()->name}}</span></a>
															</div>

<div class="panel-body">
															<?php 
 
// function untuk menampilkan nama hari ini dalam bahasa indonesia
// di buat oleh malasngoding.com
 
function hari_ini(){
	$hari = date ("D");
 
	switch($hari){
		case 'Sun':
			$hari_ini = "Minggu";
		break;
 
		case 'Mon':			
			$hari_ini = "Senin";
		break;
 
		case 'Tue':
			$hari_ini = "Selasa";
		break;
 
		case 'Wed':
			$hari_ini = "Rabu";
		break;
 
		case 'Thu':
			$hari_ini = "Kamis";
		break;
 
		case 'Fri':
			$hari_ini = "Jumat";
		break;
 
		case 'Sat':
			$hari_ini = "Sabtu";
		break;
		
		default:
			$hari_ini = "Tidak di ketahui";		
		break;
	}
 
	return "<b>" . $hari_ini . "</b>";
 
}
 
echo " ". hari_ini();
 
?>

<?php  
	
?>
									
										
													
									<table class="table table-hover">

										<thead>
											<tr>
												<th>Waktu</th>
												<th>Kegiatan</th>
												<th>Mapel</th>
												<th>Bukti</th>

											</tr>
										</thead>
										<tbody>
											@foreach($data_kegiatan as $kegiatan)
										    <tr>
											<td>{{$kegiatan->waktu}}</td>
											<td>{{$kegiatan->kegiatan}}</td>
											<td>{{$kegiatan->mapel}}</td>
											<td>{{$kegiatan->kegiatan2}}</td>
											
											
										</tr>
										@endforeach
																	</tbody>
																</table>
															</div>


						</div>
</div>
</div>
</div>
</div>
</div>
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
					  <form action="/kegiatan/create" method="POST">
					 {{csrf_field()}}
                            <div class="form-group">
                            <label for="exampleInputPassword1">Waktu</label>
                            <input name="waktu" type="text" class="form-control" id="exampleInputPassword1">
                            </div>

                             
						   <div class="form-group">
						    <label for="exampleFormControlSelect1">Kegiatan</label>
						    <select name="kegiatan" class="form-control" id="exampleFormControlSelect1">
						      <option>Sholat Dzuhur</option>
						     <option>Sholat Ashar</option>
						      <option>Sholat Magrib</option>
						       <option>Sholat Isya</option>
						        <option>Sholat Subuh</option>
						        <option>Sholat Dhuha</option>
						         <option>Sholat Tahajud</option>
						          <option>Tadarus Al-Quran</option>
						          
						    </select>
						  </div>

                           <div class="form-group">
						    <label for="exampleFormControlSelect1">Mapel</label>
						    <select name="mapel" class="form-control" id="exampleFormControlSelect1">
						     <option>PAI</option>
						      <option>PJOK</option>
						      <option>PPKN</option>
						     
						    </select>
						  </div>

						   <div class="form-group">
						    <label for="exampleFormControlSelect1">Bukti</label>
						    <select name="kegiatan2" class="form-control" id="exampleFormControlSelect1">
						     <option>Sudah</option>
						      <option>Belum</option>
						   
						     
						    </select>
						  </div>

						   					 					
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			         <button type="submit" class="btn btn-primary">Submit</button>
			        </form>
			      </div>
			    </div>
			  </div>

@stop



