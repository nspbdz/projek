@extends('layouts.index')
@section('content')
@php
$rs = App\jenis::all();
$rs2 = App\lokasi::all();
$rs4 = App\pengguna::all();
$rs3 = App\barang::all();

@endphp
<div class="p-3 mb-2 bg-primary text-white text-center">Silahkan Menambahkan Barang</div>
<br>

<form role="form" method="POST" action="{{ route('barang.store') }}"
enctype="multipart/form-data">
@csrf	

<div class="form-group">

		<br>
		</br>
		<select name="namapengguna" class="form-control  @error('namapengguna') is-invalid @enderror">
			<option value="{{ old('namapengguna') }}">-- Pilih user --</option>
			@foreach ($rs4 as $row)
			@php
			$old = ( old('namapengguna') == $row['id']) ? 'selected' : '';
			@endphp
			<option value="{{ $row['id'] }}" {{ $old }}> {{ $row['nama'] }}</option>
			@endforeach
		</select>
		@error('namapengguna')
		<div class="invalid-feedback">
			{{ $message }}	
		</div>
	@enderror	   
	</div>
<div class="form-group">
	<label>

		Masukan Barang

	</label>

	<input type="text" 
	class="form-control   @error('nama1') is-invalid @enderror"
	name="nama1" value="{{ old('nama1') }}" />
	@error('nama1')
			<div class="invalid-feedback">
				{{ $message }}	
			</div>
		@enderror	   

	


</div>

<div class="form-group">
	<label>

		Jenis barang
	</label>

	<select name="jeniss" class="form-control @error('jeniss') is-invalid @enderror">
		<option value="{{ old('jeniss') }}">-- Pilih jenis --</option>
		@foreach ($rs as $row)
		@php
		$old = ( old('jeniss') == $row['id']) ? 'selected' : '';
		@endphp
		<option value="{{ $row['id'] }}" {{ $old }}>  {{ $row['nama'] }}</option>
		
		@endforeach
	</select>
	@error('jeniss')
			<div class="invalid-feedback">
				{{ $message }}	
			</div>
		@enderror	 
</div>

<div class="form-group">
	<label>
		Donatur
	</label>	

	<select name="donaturss" class="form-control  @error('donaturss') is-invalid @enderror">
		<option value="">-- Pilih Donatur  barang --</option>

		<option value="External" @if(old('donaturss')=='External') selected @endif>External</option>
		<option value="Internal" @if(old('donaturss')=='Internal') selected @endif>Internal</option>
	</select>
	@error('donaturss')
	<div class="invalid-feedback">
		{{ $message }}	
	</div>
@enderror
</div>
<div class="form-group">
	<label>	Lokasi		</label>

	<select name="lokasis" class="form-control  @error('lokasis') is-invalid @enderror" >
		<option value="{{ old('lokasis') }}">-- Pilih Lokasi --</option>
		@foreach($rs2 as $lokasi)
		@php
		$old = ( old('lokasis') ==$lokasi['id']) ? 'selected' : '';
		@endphp
		<option value="{{ $lokasi['id'] }} " {{ $old }} >{{$lokasi->nama}}</option>
		@endforeach
	</select>
	@error('lokasis')
			<div class="invalid-feedback">
				{{ $message }}	
			</div>
		@enderror	  
</div>


<div class="form-group">
		<label>
			Kondisi
		</label>	
	
		<select name="kondisis" class="form-control  @error('kondisis') is-invalid @enderror">
			<option value="">-- Pilih Kondisi  barang --</option>
	
			<option value="baru" @if(old('kondisis')=='baru') selected @endif>Baru</option>
			<option value="bekas" @if(old('kondisis')=='bekas') selected @endif>Bekas</option>
		</select>
		@error('kondisis')
		<div class="invalid-feedback">
			{{ $message }}	
		</div>
	@enderror
<br>



<div class="form-group">
		<label>
			Status 
		</label>	
	
		<select name="statuss" class="form-control  @error('statuss') is-invalid @enderror">
			<option value="">-- Pilih status  barang --</option>
	
			<option value="aktif" @if(old('statuss')=='aktif') selected @endif>Aktif</option>
			<option value="nonaktif" @if(old('statuss')=='nonaktif') selected @endif>Nonaktif</option>
			<option value="rusak" @if(old('statuss')=='rusak') selected @endif>Rusak</option>
			<option value="hilang" @if(old('statuss')=='hilang') selected @endif>Hilang</option>
		</select>
		@error('statuss')
		<div class="invalid-feedback">
			{{ $message }}	
		</div>
	@enderror
<br>
<div class="form-group ">
	<label>
		Jumlah
	</label>
	<input type="text" class="form-control @error('stok') is-invalid @enderror" 
	name="stok" value="{{ old('stok') }}" /> 
	@error('stok')
	<div class="invalid-feedback">
		{{ $message }}	
	</div>
@enderror
</div>

<div class="form-group">
	<label>
		Tanggal Barang Masuk

	</label>

	<input type="date" 
	class="form-control @error('tglmasuks') is-invalid @enderror"
	name="tglmasuks" value="{{ old('tglmasuks') }}" />
	@error('tglmasuks')
	<div class="invalid-feedback">
		{{ $message }}	
	</div>
@enderror	 
</div>

<div class="form-group ">
		<label>
			Masukan Foto Barang
		</label>
	
		<input type="file" class="form-control" name="fotos"
		value="" />
	
	</div>


<button type="submit" class="btn btn-primary" 
name="proses" value="simpan">Simpan</button>

<button type="reset" class="btn btn-danger" 
name="unproses" value="batal">Batal</button>
</div>
</div>
</div>
</div>

</form>
@endsection

