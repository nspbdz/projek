@extends('layouts.index')
@section('content') 
@foreach ($data as $d)
<div class="p-3 mb-2 bg-primary text-white text-center">Silahkan Update Data</div>
<br>
<form role="form" method="POST" action="{{ route('pengguna.update',$d->id) }}" enctype="multipart/form-data">
@csrf	
@method('PUT')	



 <div class="container">
	<div class="row">
		<div class="col-md-6">
				<div class="form-group">
				Silahkan Update Nama Pengguna <br> <br>
				<input type="text" 
				class="form-control @error('namass') is-invalid @enderror" 
			name="namass" value="{{$d ->nama}}" />
				@error('namass')
				<div class="invalid-feedback">
					{{ $message }}	
				</div>
				@enderror
			</div>
				
		<div class="form-group">
			Silahkan Update Jenis Pengguna <br> <br>
			<select name="jpengguna" class="form-control">
			<option value="{{$d ->jenis_pengguna}}">{{$d ->jenis_pengguna}}</option>
			<option value="admin">Admin</option>
			<option value="ustadz">Ustadz</option>
		</select>
	</div>

	<div class="form-group">
		Silahkan Update ASal Pengguna <br> <br>
		<input type="text" 
		class="form-control @error('asal') is-invalid @enderror" 
	name="asal" value="{{$d ->asal}}" />
		@error('asal')
		<div class="invalid-feedback">
			{{ $message }}	
		</div>
		@enderror
	</div>
</div>
	
				
		<div class="col-md-6">
			

		
			<div class="form-group">
				Silahkan Update Hp Pengguna <br> <br>
				<input type="text" 
				class="form-control @error('hp') is-invalid @enderror" 
			name="hp" value="{{$d ->hp}}" />
				@error('hp')
				<div class="invalid-feedback">
					{{ $message }}	
				</div>
				@enderror
			</div>

			<div class="form-group">
				Silahkan Update Email Pengguna <br> <br>
				<input type="text" 
				class="form-control @error('email') is-invalid @enderror" 
			name="email" value="{{$d ->email}}" />
				@error('email')
				<div class="invalid-feedback">
					{{ $message }}	
				</div>
				@enderror
			</div>	

			<div class="form-group">
				Foto<br> <br>
				<input type="file" class="form-control" name="foto" />
			</div>	

	
	<button type="submit" class="btn btn-primary" 
	 name="proses" value="simpan">Simpan</button>
	
	<button type="reset" class="btn btn-info" 
	 name="unproses" value="batal">Batal</button>
				</div>
			</div>
</form>
@endforeach
</div>
</div>
</div>
@endsection
