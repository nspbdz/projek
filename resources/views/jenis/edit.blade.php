@extends('layouts.index')
@section('content')
@php
$rs = App\jenis::all();
$rs2 = App\lokasi::all();
$rs3 = App\pengguna::all();
$rs5 = App\barang::all();

@endphp

@foreach ($data as $d)
	
<div class="p-3 mb-2 bg-primary text-white text-center">Silahkan Menambahkan Barang</div>
<br>
<form role="form" method="POST" action="{{ route('jenis.update',$d->id) }}"
	  enctype="multipart/form-data">
@csrf	
@method('PUT')	



 <div class="container">
	<div class="row">
	  <div class="col">

	

       
        <div class="form-group">
            Silahkan Update Nama Jenis <br> <br>
            <input type="text" 
            class="form-control @error('namajenis') is-invalid @enderror" 
        name="namajenis" value="{{$d ->nama}}" />
            @error('namajenis')
            <div class="invalid-feedback">
                {{ $message }}	
            </div>
            @enderror
        </div>



		<button type="submit" class="btn btn-link btn-sm" 
		onclick="return confirm('Yakin diHapus?')">
		</button>
		



<button type="submit" class="btn btn-primary" 
name="proses" value="simpan">Simpan</button>

<button type="reset" class="btn btn-info" 
name="unproses" value="batal">Batal</button>

				
			</div>
			<div class="col">
				
			

</form>
@endforeach
</div>
</div>
</div>
@endsection

	
{{-- <div class="form-group">
		<label>
			kategori
		</label>
		<select name="jenis" class="form-control">
			<option value="">-- Pilih jenis --</option>
			@foreach ($rs as $row)
			@php
			$old = ( old('jenis') == $row['id']) ? 'selected' : '';
			@endphp
			<option value="{{ $row['id'] }}" {{ $old }}>  {{ $row['nama'] }}</option>
			@endforeach
		</select>
			</div>
			 --}}

{{-- 	

			<div class="form-group">
		<label>
			donatur
		</label>
		<select name="donatur" class="form-control">
			<option value="">-- Pilih nama Donatur --</option>
			@foreach ($rs4 as $row)
			@php
			$old = ( old('donatur') == $row['id']) ? 'selected' : '';
			@endphp
			<option value="{{ $row['id'] }}" {{ $old }}>  {{ $row['asaldonatur'] }}</option>
			@endforeach
		</select>
			</div>

	
	<div class="form-group">
		<label>
			lokasi
		</label>
		<select name="lokasi" class="form-control">
			<option value="">-- Pilih lokasi --</option>
			@foreach ($rs2 as $row)
			@php
			$old = ( old('lokasi') == $row['id']) ? 'selected' : '';
			@endphp
			<option value="{{ $row['id'] }}" {{ $old }}>  {{ $row['nama_lokasi'] }}</option>
			@endforeach
		</select>

	</div>
	<div class="form-group">
		<label>
			stok
		</label>
		<input type="text" 
		class="form-control @error('stok') is-invalid @enderror" 
		name="stok" value="{{ old('stok') }}" />
		@error('stok')
			<div class="invalid-feedback">
				{{ $message }}	
			</div>
		@enderror	   
	</div>

<div class="form-group">
		<label>
			kondisi
		</label>
		<input type="text" 
		class="form-control @error('kondisi') is-invalid @enderror" 
	name="kondisi" value="{{ old('kondisi') }}" />
		@error('kondisi')
		<div class="invalid-feedback">
			{{ $message }}	
		</div>
		@enderror
	</div>
	
	<div class="form-group">
		<label>
			tanggal masuk
		</label>
		<input type="date" 
		class="form-control @error('tglmasuk') is-invalid @enderror" 
		name="tglmasuk" value="{{ old('tglmasuk') }}" />
		@error('tglmasuk')
			<div class="invalid-feedback">
				{{ $message }}	
			</div>
		@enderror	   
	</div>

<div class="form-group">
	<label>
		tanggal keluar
	</label>
	<input type="date" 
	class="form-control @error('tglkeluar') is-invalid @enderror" 
	name="tglkeluar" value="{{ old('tglkeluar') }}" />
	@error('tglkeluar')
		<div class="invalid-feedback">
			{{ $message }}	
		</div>
	@enderror	   
</div>
	
	<div class="form-group">
		<label>
			Foto
		</label>
		<input type="file" class="form-control" name="foto"
		       value="" />
	</div> --}}  
		
	