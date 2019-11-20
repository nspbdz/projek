@extends('layouts.index') 
@section('content')
@php
$ar_judul = ['No','Id','Pengguna','Nama','Jenis','Lokasi','Jumlah','Kondisi','tglmasuk','tglkeluar','Foto'];
$no = 1;
@endphp
<h3>Daftar barang</h3>
<br/>
<a href="{{ route('barang.create') }}">
<i class="fa fa-plus-square fa-3x" aria-hidden="true" ></i>
</a>&nbsp;&nbsp;&nbsp;
 
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
			<!-- <td>{{-- $barang->namaDonatur --}}</td> -->
			<td>{{ $barang->kategori }}</td>
			<td>{{ $barang->namaLokasi }}</td>
			<td>{{ $barang->stok }}</td>
			<td>{{ $barang->kondisi }}</td>
			<td>{{ $barang->tglmasuk }}</td>
			<td>{{ $barang->tglkeluar }}</td>
			<td>{{ $barang->foto }}</td>

				
		    </td>		 		 
		</tr>
	@endforeach		
	</tbody>
</table>
@endsection