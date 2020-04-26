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
									
									
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>NIS</th>
												<th>Nama</th>
												<th>Email</th>
												
												
											</tr>
										</thead>
										<tbody>
											@foreach($data_datadiri as $datadiri) 
										    <tr>
											<td>{{$datadiri->nis}}</td>
											<td>{{$datadiri->name}}</td>
											<td>{{$datadiri->email}}</td>
											
										
											
											<td>
												<a href="/datadiri/{{$datadiri->id}}/edit" class="btn-warning btn-sm">ganti password</a>
									           
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
					
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			         <button type="submit" class="btn btn-primary">Submit</button>
			        </form>
			      </div>
			    </div>
			  </div>

@stop



