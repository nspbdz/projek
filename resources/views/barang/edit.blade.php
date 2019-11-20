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
<form role="form" method="POST" action="{{ route('barang.update',$d->id) }}" enctype="multipart/form-data">
	@csrf
	@method('PUT')
	<div class="container">
		<div class="row">
         <div class="col-md-5">
				<div class="form-group">

						<select name="namapengguna" class="form-control">
								<option value="">-- Pilih Jenis --</option>
								@foreach ($rs3 as $row)
								@php
								$sel = ($d->penggunaid == $row['id']) ? 'selected' : '';
								@endphp
								<option value="{{ $row['id'] }}" {{ $sel }}> {{ $row['nama'] }}</option>
								@endforeach
							</select>
					{{-- <input type="text" class="form-control" name="namapengguna" value="{{$d ->nama}}" /> --}}


				</div>



			<div class="form-group">

				<input type="text" class="form-control" name=" nama1" value="{{$d -> nama_barang}}" />


			</div>
		<div class="form-group">

			<select name="donaturss" class="form-control">
				<option value="{{$d ->donatur}}">{{$d ->donatur}}</option>
				<option value="External">External</option>
				<option value="Internal">Internal</option>
			</select>
		</div>
		<div class="form-group">

			<select name="jeniss" class="form-control">
				<option value="">-- Pilih Jenis --</option>
				@foreach ($rs as $row)
				@php
				$sel = ($d->jenisid == $row['id']) ? 'selected' : '';
				@endphp
				<option value="{{ $row['id'] }}" {{ $sel }}> {{ $row['nama'] }}</option>
				@endforeach
			</select>

		</div>

		<div class="form-group">

			<input type="date" class="form-control" name="tglmasukk" value="{{ $d->tglmasuk }}" />
		</div>
		


		</div>

			<div class="col-md-5">
					<div class="form-group">

							@php
							// $sel = ($d->kondisi == $d->id) ? 'selected' : ''; ($d->kondisi) ini diambil dari tabel kondisi
							$sel = ($d->kondisi == $d->id) ? 'selected' : '';
							@endphp
				
							{{-- name="kondisis" diambil dari barangcontroller di bagian update   'kondisi'=>$request->kondisis,  --}}
							<select name="kondisis" class="form-control">
								<option value="baru" {{$sel}} selected>Baru</option>
								<option value="bekas" {{$sel}}>Bekas</option>
							</select>
						</div>
			

		<div class="form-group">

			<select name="lokasi" class="form-control">
				<option value="">-- Pilih Lokasi --</option>
				@foreach ($rs2 as $row)
				@php
				$sel = ($d->lokasiid == $row['id']) ? 'selected' : '';
				@endphp
				<option value="{{ $row['id'] }}" {{ $sel }}> {{ $row['nama'] }}</option>
				@endforeach
			</select>
		</div>


		<div class="form-group">

			<input type="text" class="form-control" name="jumlah" value="{{$d -> stok}}" />
		</div>



	<div class="form-group">

		<input type="file" class="form-control" name="foto" value="" />
	</div>




	<button type="submit" class="btn btn-primary" name="proses" value="simpan">Simpan</button>

	<button type="reset" class="btn btn-info" name="unproses" value="batal">Batal</button>
</form>
@endforeach
</div>
</div>
</div>
@endsection