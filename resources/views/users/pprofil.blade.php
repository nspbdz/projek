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
<div class="col-md-3">

		<ul class="list-group">
				<li class="list-group-item">Nama pengguna : {{ $d->namaPengguna }}</li>
		<li class="list-group-item"> 

		</li>
				<li class="list-group-item">
		jumlah barang : {{ $d->stok }}

				</li>
				<li class="list-group-item">
		asal donatur : {{ $d->donatur }}

				</li>
				<li class="list-group-item">
		jenis barang : {{ $d->kategori }}

				</li>
				<li class="list-group-item">
		jenis barang : {{ $d->namaLokasi }}
	</li>
{{-- 
				
	

		Nama barang : {{ $d->nama_barang }}
		jumlah barang : {{ $d->stok }}
		asal donatur : {{ $d->donatur }}
		jenis barang : {{ $d->kategori }}
		jenis barang : {{ $d->namaLokasi }} --}}
		@endforeach
</div>

	<div class="col-md-3">
		</div>

	</div>
		</div>

</div>
@endsection
