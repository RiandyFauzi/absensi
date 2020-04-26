@extends('layouts.master')

@section('content')
<div class="main">
<div class="main-content">
<div class="container-flud">
<div class="row">
<div class="col-md-12">
 <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Jadwal</h3>
									<div class="right">
										
										
									</div>
									
								</div>
								<div class="panel-body">
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
											
											<td>
												<a href="/kegiatan/{{$kegiatan->id}}/edit" class="btn-warning btn-sm">Masukan Bukti</a>
									           
											</td>
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
                            <label for="exampleInputPassword1">Kegiatan</label>
                            <input name="kegiatan" type="text" class="form-control" id="exampleInputPassword1">
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



