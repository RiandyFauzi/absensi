@extends('layouts.master')
  
@section('content')
<div class="main">
<div class="main-content">
<div class="container-flud">
<div class="row">
<div class="col-md-12">
<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Inputs</h3>
								</div>
								<div class="panel-body">
									 <form action="/datadiri/{{$datadiri->id}}/update" method="POST">
					        {{csrf_field()}}
                            <div class="form-group">
                            <label for="exampleInputPassword1">Nis</label>
                            <input name="nis" type="text" class="form-control" id="exampleInputPassword1" value="{{$user->nis}}">
                            </div>

                             
						 
			        </form>
								</div>
							</div>
	</div>
</div>
</div>
</div>
</div>
@stop

@section('content')
		<h1>Update Absen</h1>
		@if(session('sukses'))
		<div class="alert alert-success" role="alert">
      {{session('sukses')}}
</div>
@endif
	<div class="row">
		<div class="col-lg-12">
	  <form action="/datadiri/{{$datadiri->id}}/update" method="POST">
					 {{csrf_field()}}
                          <div class="form-group">
                            <label for="exampleInputPassword1">Waktu</label>
                            <input name="waktu" type="text" class="form-control" id="exampleInputPassword1" value="{{$datadiri->waktu}}">
                            </div>

                             
						   <div class="form-group">
						    <label for="exampleFormControlSelect1">Kegiatan</label>
						    <select name="kegiatan" class="form-control" id="exampleFormControlSelect1" value="{{$datadiri->kegiatan}}">
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
						    <select name="mapel" class="form-control" id="exampleFormControlSelect1" value="{{$datadiri->mapel}}">
						     <option>PAI</option>
						      <option>PJOK</option>
						      <option>PPKN</option>
						     
						    </select>
						  </div>
						 <button type="submit" class="btn btn-warning">Submit</button>
			        </form>
					</div>
    </div>
	</div>
	
	

	@endsection