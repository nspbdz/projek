@extends('layouts.index') 
@section('content')
@php
$ar_judul = ['No','Id','Pengguna','Nama','Donatur','Jenis','Lokasi','Jumlah','Kondisi','Tgl masuk','Tgl keluar','Foto'];
$no = 1;
@endphp

<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
	  <li class="breadcrumb-item"><a href="{{ url('home')}}">Home</a></li>
	  <li class="breadcrumb-item active" aria-current="page">Data Seluruh Barang</li>
	</ol>
  </nav>
	<div class="p-3 mb-2 bg-primary text-white text-center">Data Seluruh Barang</div>
	<br/>
	<div class="container-fluid">
		<div class="row">
			
			<div class="col-md-3">
		
		<a href="{{ url('excelinbarang') }}">
				<button type="button" class="btn btn-primary">Excel</button>
		</a>
		<br>
		<br>

					<a href="{{ route('barang.create') }}">
				
				<button type="button" class="btn btn-primary">Menambahkan Barang</button>
				<br>
				<br>
				<a href="{{ url('pdfinbarang') }}">
						<button type="button" class="btn btn-primary">Cetak PDF</button>

		
	</a>&nbsp;&nbsp;&nbsp;

			</div>
			
		<div class="col-md-9">

	
 
<table class="table table-striped">
	<thead>
		<tr>
		@foreach ($ar_judul as $jdl)		
			<th>{{ $jdl }}</th>
		@endforeach		
		</tr>	
	</thead>
	<tbody>
	@foreach ($data as $barang)	
		<tr>
			{{-- ganti tabel yang diinginkan --}}
			<td>{{ $no++ }}</td>
			<td>{{ $barang->id }}</td>
			<td>{{ $barang->namaPengguna }}</td>
			<td>{{ $barang->nama_barang }}</td>
			<td>{{ $barang->namaDonatur }}</td>
			<td>{{ $barang->kategori }}</td>
			<td>{{ $barang->namaLokasi }}</td>
			<td>{{ $barang->stok }}</td>
			<td>{{ $barang->kondisi }}</td>
			<td>{{ $barang->tglmasuk }}</td>
			<td>{{ $barang->tglkeluar }}</td>
			<td><img src="img/{{ $barang->foto }}" 
				width="250%"/></td>
		   <td width="250%">
			<td>
				<!-- Example single danger button -->
<div class="btn-group">
		<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		  Action
		</button>
		<div class="dropdown-menu">
		  <a class="dropdown-item color='black'" href="{{route('barang.edit', $barang->id)}}">Update</a>
		  <a class="dropdown-item" href="#"></a>
		  <a class="dropdown-item" href="#">Something else here</a>
		  <div class="dropdown-divider"></div>
		  <a class="dropdown-item" href="#">Separated link</a>
		</div>
	  </div>
		    </td>		 		 
		</tr>
	@endforeach		
	</tbody>
</table>
</div>
</div>
</div>
@endsection
