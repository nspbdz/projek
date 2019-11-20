@extends('layouts.index')
@section('content')
@foreach($data as $d) 

<div class="p-3 mb-2 bg-primary text-white text-center">Detail Barang</div><br>

<div class="row">
		<div class="col-md-2">
		</div>
	<div class="col-md-3">
		
		<div class="jumbotron">
			<center>
			@if(!empty($d->foto))
			<figure class="figure">
					<img src="{{asset('img')}}/{{ $d->foto }}" class="figure-img img-fluid rounded" alt="...">
					</figure>
			{{-- <img src="{{asset('img')}}/{{ $d->foto }}" 
				 width="400px" class="img-thumbnail" /> --}}
		@else
			<i class="fa fa-user-o fa-5x" aria-hidden="true"></i>
			<br/>Foto Belum Diupload
		@endif
	</div>

</div>
<div class="col-md-6">
<table border="1" cellpadding="10">
		
			<tr><td>	Nama pengguna </td><td> :	 {{ $d->namaPengguna }}</td>	</tr>
			<tr><td>	Nama barang </td><td> : {{ $d->nama_barang }}</td></tr>
	<tr><td>asal donatur </td><td> : {{ $d->donatur }}</td></tr> 
	<tr><td>jenis barang </td><td> : {{ $d->kategori }}</td></tr>
	<tr><td>Lokasi barang </td><td> : {{ $d->namaLokasi }}</td></tr>
	<tr><td>		jumlah barang </td><td> : {{ $d->stok }}</td></tr>
	<tr><td>		Kondisi barang </td><td> : {{ $d->kondisi }}</td></tr>
	<tr><td>Tanggal Masuk </td><td> : {{ $d->tglmasuk }}</td></tr>
	{{-- <a class="nav-link active" href="{{ url('barang.index') }}"><i class="fa fa-home" aria-hidden="true"> &nbsp;</i>Back </a>             --}}


</table>
{{-- 
				
	

		Nama barang : {{ $d->nama_barang }}
		jumlah barang : {{ $d->stok }}
		asal donatur : {{ $d->donatur }}
		jenis barang : {{ $d->kategori }}
		jenis barang : {{ $d->namaLokasi }} --}}
		@endforeach 
		<br><br>
	<button type="button" class="btn btn-primary" href="{{ url('barang.index') }}">kembali</button>
 
</div>

	{{-- <div class="col-md-3">
		</div> --}}

	</div>
		</div>

</div>
@endsection
