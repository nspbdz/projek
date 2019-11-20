@extends('layouts.index')
@section('content') 
@php
$rs = App\jenis::all();
$rs2 = App\lokasi::all();
$rs5 = App\barang::all();

@endphp

@foreach ($data as $d)
	
<div class="p-3 mb-2 bg-primary text-white text-center">Silahkan Update User</div>
<br>
<form role="form" method="POST" action="{{ route('users.update',$d->id) }}" enctype="multipart/form-data">
@csrf	
@method('PUT')	



 <div class="container">
	<div class="row">
		<div class="col-md-6">
			

 
	

	<div class="form-group">
			Update Nama Users
 <br><br>		<input type="text" 
		class="form-control @error('name') is-invalid @enderror" 
	name="name" value="{{$d -> name}}" />
		@error('name')
		<div class="invalid-feedback">
			{{ $message }}	
		</div>
		@enderror
	</div>

				
	
	
			<div class="form-group">
					Update Role Users
 <br><br>
					<select name="role" class="form-control">
						<option value="{{$d ->role}}">{{$d ->role}}</option>
						<option value="administrator">administrator</option>
						<option value="ustadz">ustadz</option>
					</select>
				</div>
</div>
					
		<div class="col-md-6">

				<div class="form-group">
						Update Email Users <br><br>

					<input type="text" 
					class="form-control @error('email') is-invalid @enderror" 
				name="email" value="{{$d -> email}}" />
					@error('email')
					<div class="invalid-feedback">
						{{ $message }}	
					</div>
					@enderror
				</div>

				
{{-- <div class="form-group">
					Update Password Users <br><br>
						
					<input type="password" 
					class="form-control"  placeholder="password Users"
				name="password" value="{{$d -> password}}" />
					
					
				</div>  --}}

			<div class="form-group">
			Update Foto Users
 <br><br>					
					<input type="file" class="form-control" name="foto"
						   value="{{ $d->foto }}" />
				</div>


	
	<button type="submit" class="btn btn-primary" 
	 name="proses" value="simpan">Simpan</button>
	
	<button type="reset" class="btn btn-info" 
	 name="unproses" value="batal">Batal</button>
				</div>
			</div>
		</div>
	</div>
</form>
@endforeach
</div>
</div>
</div>
@endsection